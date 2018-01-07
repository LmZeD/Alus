<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Beer;
use App\Geocode;
use App\Brewery;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    public function getIndex(){
        return view('input_screen');
    }

    public function makeATrip(Request $request){
        //time tracking
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        $start = $time;
        //---------------------
        //input validation
        $validationMsg=$this->validateInputFields($request->longitude,$request->latitude);
        if($validationMsg!='Success'){
            return redirect(route('trip.index'))->with('error',$validationMsg);
        }
        //end of input validation

        //setting up data (from inputs, setting basic boundaries)
        $trip_distance=2000;//km
        $latitude_difference_allowed=($trip_distance/2)/100; // divided by 2 - you have to go back
        $longitude_difference_allowed=($trip_distance/2)/100;// divided by 100 - (+-110 km per whole
                                                            // number of coordinate, so making 100 will be very generous)
        $start_latitude=$request->latitude;
        $start_longitude=$request->longitude;

        //preparing data
        $breweries_data=$this->setUpBreweriesData($start_longitude,$start_latitude,$longitude_difference_allowed,$latitude_difference_allowed);
        //end of preparing data

        //start of calculations
        $current_long=$start_longitude;
        $current_lat=$start_latitude;
        $used_indexes=array();//contains indexes of visited breweries

        $distance_left=$trip_distance;
        $i=0;
        while($this->findClosestPoint($current_long,$current_lat,
                $used_indexes,$distance_left,$breweries_data) != null){

            $closest_data=$this->findClosestPoint($current_long,$current_lat,
                $used_indexes,$distance_left,$breweries_data);

            $used_indexes[$i]=$closest_data['closest_brewery_index'];
            $distance_left=$distance_left-$closest_data['closest_distance'];

            $breweries_data[$closest_data['closest_brewery_index']]['distance']=$closest_data['closest_distance'];
            $current_lat=$breweries_data[$closest_data['closest_brewery_index']]['latitude'];
            $current_long=$breweries_data[$closest_data['closest_brewery_index']]['longitude'];
            $i++;
        }
        //end of calculations

        //fetching data for output
        $results=$this->fetchDataForOutput($used_indexes,$breweries_data,$distance_left,$start_longitude
            ,$start_latitude,$trip_distance);
        if($results==null){
            return redirect()->route('trip.index')->with('error','No breweries are close enough...');
        }
        //end of fetching

        //last block of time tracking
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        $finish = $time;
        $total_time = round(($finish - $start), 4);
        $run_time = $total_time;
        //-------------------------

        return view('output_screen',['results'=>$results,'start_latitude'=>$start_latitude,
            'start_longitude'=>$start_longitude,'run_time'=>$run_time]);
    }

    public function fetchDataForOutput($used_indexes,$breweries_data,$distance_left,$start_long,
                                        $start_lat,$trip_distance){
        $i=0;
        $results=array();
        $beer_count=0;
        foreach ($used_indexes as $index){
            $brewery=Brewery::where('id',$index)->select('id','name')->first();
            $beer_found=Beer::where('brewery_id',$index)->get();
            $results[$i]['brewery']=$brewery;
            $beer_count=$beer_count+$beer_found->count();
            $results[$i]['beer']=$beer_found;
            $results[$i]['latitude']=$breweries_data[$index]['latitude'];
            $results[$i]['longitude']=$breweries_data[$index]['longitude'];
            $results[$i]['distance']=$breweries_data[$index]['distance'];
            $i++;
        }

        if(is_array($results) && $results != null) {
            //hard-coded home location and additional data for output
            $results[$i]['brewery']['id'] = '0';
            $results[$i]['brewery']['name'] = 'HOME';
            $results[$i]['latitude'] = $start_lat;
            $results[$i]['longitude'] = $start_long;
            $results[$i]['distance'] = $breweries_data[end($used_indexes)]['distance_from_home'];
            $results['distance_left'] = $distance_left - $breweries_data[end($used_indexes)]['distance_from_home'];
            $results['max_trip_distance'] = $trip_distance;
            $results['beer_count'] = $beer_count;
            $results=$this->unsetSameBeer($results);
        }
        else{
            return null;
        }

        return $results;
    }

    public function unsetSameBeer($results){
        if($results==null){
            return null;
        }
        $all_beer=array();
        $i=0;
        $j=0;//index for results
        foreach ($results as $result) {
            if (is_array($result) && array_key_exists('beer',$result)) {
                foreach ($result['beer'] as $beer) {
                    if(!in_array($beer['name'],$all_beer)){//if beer is not unique
                        $all_beer[$i++] = $beer['name'];
                    }
                }
                unset($result['beer']);//to avoid unnecessary data duplications
                $results[$j++]=$result;
            }
        }
        $results['unique_beer']=$all_beer;//uniques left, merged to one array
        return $results;
    }

    public function findClosestPoint($current_long,$current_lat,$used_indexes,$distance_left,
                                      $breweries_data){
        //validate input fields (overkill? Params come from function that I wrote. Maybe for multiple use purposes?)
            if($this->validateInputFields($current_long,$current_lat) != 'Success'){
                return null;
            }
        //
        $closest_data=array();//holder for return
        $closest_index=-1;//index of closest brewery
        $closest_distance=999999;//distance to closest brewery

        foreach ($breweries_data as $data){
            $distance=$this->calculateDistanceBetweenTwoPoints($current_long,$current_lat,$data['longitude'],
                $data['latitude']);
            if($distance != null && $distance<$closest_distance && !in_array($data['brewery_id'],$used_indexes) && $distance!=false){
                $closest_distance=$distance;
                $closest_index=$data['brewery_id'];
            }
        }
        if($closest_index ==- 1){//nothing in range found
            return null;
        }
        if($closest_index != -1 && $distance_left<$closest_distance+$breweries_data[$closest_index]['distance_from_home']){
            return null;//stops while @makeATrip method
        }
        if($closest_distance>$distance_left){
            return null;//stops while @makeATrip method
        }

        $closest_data['closest_brewery_index']=$closest_index;
        $closest_data['closest_distance']=$closest_distance;
        return $closest_data;
    }

    public function setUpBreweriesData($start_long,$start_lat,$longitude_difference_allowed,$latitude_difference_allowed){

        $breweries=DB::table('geocodes')->leftjoin('breweries', function($join) use ($start_long,$start_lat,$longitude_difference_allowed,$latitude_difference_allowed)
        {
            $join->on('breweries.id', '=', 'geocodes.brewery_id');
        })->whereBetween('longitude',[$start_long-$longitude_difference_allowed,$start_long+$longitude_difference_allowed])
            ->whereBetween('latitude',[($start_lat-$latitude_difference_allowed*2),($start_lat+$latitude_difference_allowed)*2])
            ->get();
        $i=0;

//        $test=array();
//        foreach ($breweries as $brewery){
//            $distance=$this->calculateDistanceBetweenTwoPoints($start_long,$start_lat,
//                $brewery->longitude,$brewery->latitude);
//            $test[$i]['home_to_brewery_distance']=$distance;
//            $i++;
//        }
//        asort($test);
//        dd($test);

        //dd($breweries);
        $breweries_data=array();
        foreach ($breweries as $brewery){
            $beersInBrewery=Beer::where('brewery_id',$brewery->id)->count();
            $brewery_coordinates=Geocode::where('brewery_id',$brewery->id)->select('latitude','longitude')->first();
            $breweries_data[$brewery->id]['beers_count']=$beersInBrewery;
            $breweries_data[$brewery->id]['brewery_id']=$brewery->id;
            $breweries_data[$brewery->id]['latitude']=$brewery_coordinates['latitude'];
            $breweries_data[$brewery->id]['longitude']=$brewery_coordinates['longitude'];
            $breweries_data[$brewery->id]['distance_from_home']=
                $this->calculateDistanceBetweenTwoPoints($start_long,$start_lat,$brewery->longitude,$brewery->latitude);
        }
        return $breweries_data;
    }

    public function calculateDistanceBetweenTwoPoints($long1,$lat1,$long2,$lat2){//haversine formula
        if($this->validateInputFields($long1,$lat1) !='Success'){
            return false;
        }
        if($this->validateInputFields($long2,$lat2)!='Success'){
            return false;
        }
//        $long1="19.432956";
//        $lat1="51.742503";
//        $long2="10.88260038";
//        $lat2="49.88510132";

//        $long1=round($long1,8);
//        $long2=round($long2,8);
//        $lat1=round($lat1,8);
//        $lat2=round($lat2,8);

        $R = 6373;//radius of Earth in km

        $long1=deg2rad($long1);
        $long2=deg2rad($long2);
        $lat1=deg2rad($lat1);
        $lat2=deg2rad($lat2);

        $delta_long =$long2 - $long1;
        $delta_lat = $lat2 - $lat1;

        $a = pow(sin($delta_lat / 2),2) + cos($lat1) * cos($lat2) * pow(sin($delta_long / 2),2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $km = $R * $c;
        $km = round($km, 3);

        return $km;
    }

    public function validateInputFields($longitude,$latitude){
        if($latitude == null || $latitude==''){
            return 'Please fill latitude field';
        }
        if($longitude == null || $longitude==''){
            return 'Please fill longitude field';
        }
        if(!is_double(filter_var($latitude, FILTER_VALIDATE_FLOAT)) || !is_double(filter_var($longitude, FILTER_VALIDATE_FLOAT))){
            return 'Please enter valid data to the fields';
        }
        if($latitude>85.05112878 || $latitude<-85.05112878){
            return 'Please enter valid latitude value';
        }
        if($longitude>85.05112878 || $longitude<-85.05112878){
            return 'Please enter valid longitude value';
        }

        return 'Success';
    }
}

