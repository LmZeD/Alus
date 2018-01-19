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
    public function getIndex(){//returns screen where you can input values for further calculations
        return view('inputScreen');
    }

    public function makeATrip(Request $request){//main method, initiates all calculations
        //used when traveling around the world (travel distance 200000)
        ini_set('max_execution_time', 600);//(execution time for very big distance)oh boy, can't wait to travel around the world!
        $start = $this->getCurrentMicroTime();//time tracking

        //input validation
        $validationMsg=$this->validateInputFields($request->longitude,$request->latitude);
        if($validationMsg!='Success'){
            return redirect(route('trip.index'))->with('error',$validationMsg);
        }
        //end of input validation

        //setting up data (from inputs, setting basic boundaries)
        $tripDistance=2000;//km
        $latitudeDifferenceAllowed=($tripDistance)/100+1;// divided by 100 - (+-110 km per whole
        $longitudeDifferenceAllowed=($tripDistance)/100+1;// number of coordinate, so making 100 will be very generous)
                                                            //+1 for rounding mistakes
        $startLatitude=$request->latitude;
        $startLongitude=$request->longitude;
        //end of setting up data

        $results=$this->calculateWholeTrip($startLongitude,$startLatitude,$longitudeDifferenceAllowed,$latitudeDifferenceAllowed,$tripDistance);
        //last block of time tracking
        $finish=$this->getCurrentMicroTime();
        $totalTime = round(($finish - $start), 4);
        $runTime = $totalTime;
        //-------------------------

        return view('outputScreen',['results'=>$results,'startLatitude'=>$startLatitude,
            'startLongitude'=>$startLongitude,'runTime'=>$runTime]);
    }

    private function calculateWholeTrip($startLongitude,$startLatitude,$longitudeDifferenceAllowed,
                                        $latitudeDifferenceAllowed,$tripDistance){
        //preparing data
        $breweriesData=$this->setUpBreweriesData($startLongitude,$startLatitude,$longitudeDifferenceAllowed,$latitudeDifferenceAllowed);
        //end of preparing data

        //start of calculations
        $routeData=$this->calculateRoute($startLongitude,$startLatitude,$tripDistance,$breweriesData);
        $usedIndexes=$routeData[0];
        $distanceLeft=$routeData[1];
        $breweriesData=$routeData[2];
        //end of calculations

        //fetching data for output
        $results=$this->fetchDataForOutput($usedIndexes,$breweriesData,$distanceLeft,$startLongitude
            ,$startLatitude,$tripDistance);
        if($results==null){
            return redirect()->route('trip.index')->with('error','No breweries are close enough...');
        }
        //end of fetching
        return $results;
    }

    private function calculateRoute($startLongitude,$startLatitude,$tripDistance,$breweriesData
                ){
        $currentLong=$startLongitude;
        $currentLat=$startLatitude;
        $usedIndexes=[];//contains indexes of visited breweries

        $distanceLeft=$tripDistance;//setting up starting data
        $i=0;//index for usedIndexes array
        while($this->findClosestPoint($currentLong,$currentLat,
                $usedIndexes,$distanceLeft,$breweriesData) != null){//while closest point exists and you
            //can go back home after visiting it
            $closestData=$this->findClosestPoint($currentLong,$currentLat,
                $usedIndexes,$distanceLeft,$breweriesData);//finds closest point

            $usedIndexes[$i]=$closestData['closestBreweryIndex'];//inserts index of found point to visited indexes
            $distanceLeft=$distanceLeft-$closestData['closestDistance'];//subtracts trip distance

            //setting up values for next iteration
            $breweriesData[$closestData['closestBreweryIndex']]['distance']=$closestData['closestDistance'];
            $currentLat=$breweriesData[$closestData['closestBreweryIndex']]['latitude'];
            $currentLong=$breweriesData[$closestData['closestBreweryIndex']]['longitude'];
            $i++;
        }
        return [$usedIndexes,$distanceLeft,$breweriesData];
    }

    private function getCurrentMicroTime(){
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        return $time;
    }

    public function fetchDataForOutput($usedIndexes,$breweriesData,$distanceLeft,$startLong,
                                        $startLat,$tripDistance){
        $i=0;//index for results
        $results=[];//to store data for return
        $beerCount=0;//for output, since I'm already merging I can count as well
        foreach ($usedIndexes as $index){
            $results=$this->getBeerAndBreweryDataByIndex($results,$index,$i,$breweriesData);
            $beerCount=$beerCount+$results[$i]['beer']->count();
            $i++;
        }

        if(is_array($results) && $results != null) {
            //hard-coded home location and additional data for output
            $results=$this->setLastDataBeforeOutput($i,$results,$startLat,$startLong,
                $breweriesData,$distanceLeft,$tripDistance,$beerCount,$usedIndexes);
        }
        else{
            return null;
        }
        return $results;
    }

    private function getBeerAndBreweryDataByIndex($results,$index,$indexForResults,$breweriesData){
        $brewery=Brewery::where('id',$index)->select('id','name')->first();
        $beerFound=Beer::where('brewery_id',$index)->get();
        $results[$indexForResults]['brewery']=$brewery;

        $results[$indexForResults]['beer']=$beerFound;
        $results[$indexForResults]['latitude']=$breweriesData[$index]['latitude'];
        $results[$indexForResults]['longitude']=$breweriesData[$index]['longitude'];
        $results[$indexForResults]['distance']=$breweriesData[$index]['distance'];
        return $results;
    }

    private function setLastDataBeforeOutput($index,$results,$lat,$long,$breweriesData,
                                             $distanceLeft,$tripDistance,$beerCount,$usedIndexes){
        $results[$index]['brewery']['id'] = '0';
        $results[$index]['brewery']['name'] = 'HOME';
        $results[$index]['latitude'] = $lat;
        $results[$index]['longitude'] = $long;
        $results[$index]['distance'] = $breweriesData[end($usedIndexes)]['distanceFromHome'];
        $results['distanceLeft'] = $distanceLeft - $breweriesData[end($usedIndexes)]['distanceFromHome'];
        $results['maxTripDistance'] = $tripDistance;
        $results['beerCount'] = $beerCount;
        $results=$this->unsetSameBeer($results);
        return $results;
    }

    public function unsetSameBeer($results){
        if($results==null){//validation block
            return null;
        }
        $allBeer=[];//will contain beer from all breweries in same place
        $i=0;//index for allBeer array
        $j=0;//index for results
        foreach ($results as $result) {
            if (is_array($result) && array_key_exists('beer', $result)) {
                foreach ($result['beer'] as $beer) {
                    if (!in_array($beer['name'], $allBeer)) {//if beer is not unique
                        $allBeer[$i++] = $beer['name'];
                    }
                }
                unset($result['beer']);//to avoid unnecessary data duplications
                $results[$j++] = $result;
            }
        }
        $results['uniqueBeer']=$allBeer;//uniques left, merged to one array
        return $results;
    }

    public function findClosestPoint($currentLong,$currentLat,$usedIndexes,$distanceLeft,
                                     $breweriesData){
        //validate input fields (overkill? Params come from function that I wrote. Maybe for multiple use purposes?)
            if($this->validateInputFields($currentLong,$currentLat) != 'Success'){
                return null;
            }
        //
        $closestData=null;//holder for return
        $closestIndex=-1;//index of closest brewery
        $closestDistance=999999;//distance to closest brewery
        foreach ($breweriesData as $data){
            $distance=$this->calculateDistanceBetweenTwoPoints($currentLong,$currentLat,$data['longitude'],
                $data['latitude']);
            if(!($distance === 'fail') && $distance<$closestDistance && !in_array($data['breweryId'],$usedIndexes)){
                $closestDistance=$distance;
                $closestIndex=$data['breweryId'];
            }
        }
        if($closestIndex ==- 1){//nothing in range found
            return null;//stops while @makeATrip method
        }
        if($closestIndex != -1 && $distanceLeft<$closestDistance+$breweriesData[$closestIndex]['distanceFromHome']){
            return null;//stops while @makeATrip method
        }
        if($closestDistance>$distanceLeft){
            return null;//stops while @makeATrip method
        }
        //if statements passed, setting up data to return
        $closestData['closestBreweryIndex']=$closestIndex;
        $closestData['closestDistance']=$closestDistance;
        return $closestData;
    }

    public function setUpBreweriesData($startLong,$startLat,$longitudeDifferenceAllowed,$latitudeDifferenceAllowed){
        //db select of geocodes with breweries
        $breweries=DB::table('geocodes')->leftjoin('breweries', function($join) use ($startLong,$startLat,$longitudeDifferenceAllowed,$latitudeDifferenceAllowed)
        {
            $join->on('breweries.id', '=', 'geocodes.brewery_id');
        })->whereBetween('longitude',[$startLong-$longitudeDifferenceAllowed,$startLong+$longitudeDifferenceAllowed])
            ->whereBetween('latitude',[($startLat-$latitudeDifferenceAllowed*2),($startLat+$latitudeDifferenceAllowed)*2])
            ->get();

        $breweriesData=[];//array for return data
        //setting up data for calculations
        foreach ($breweries as $brewery){
            if($brewery->id != null) {
                $beersInBrewery = Beer::where('brewery_id', $brewery->id)->count();
                $breweryCoordinates = Geocode::where('brewery_id', $brewery->id)->select('latitude', 'longitude')->first();
                $breweriesData[$brewery->id]['beersCount'] = $beersInBrewery;
                $breweriesData[$brewery->id]['breweryId'] = $brewery->id;
                $breweriesData[$brewery->id]['latitude'] = $breweryCoordinates['latitude'];
                $breweriesData[$brewery->id]['longitude'] = $breweryCoordinates['longitude'];
                $breweriesData[$brewery->id]['distanceFromHome'] =
                    $this->calculateDistanceBetweenTwoPoints($startLong, $startLat, $brewery->longitude, $brewery->latitude);
            }
        }
        return $breweriesData;
    }

    public function calculateDistanceBetweenTwoPoints($long1,$lat1,$long2,$lat2){//haversine formula
        //validation
        if($this->validateInputFields($long1,$lat1) !='Success'){
            return 'fail';
        }
        if($this->validateInputFields($long2,$lat2)!='Success'){
            return 'fail';
        }
        //end of validation

        $R = 6373;//radius of Earth in km

        $long1=deg2rad($long1);
        $long2=deg2rad($long2);
        $lat1=deg2rad($lat1);
        $lat2=deg2rad($lat2);

        $deltaLong =$long2 - $long1;
        $deltaLat = $lat2 - $lat1;

        $a = pow(sin($deltaLat / 2),2) + cos($lat1) * cos($lat2) * pow(sin($deltaLong / 2),2);

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
        if($latitude>85 || $latitude<-85){
            return 'Please enter valid latitude value';
        }
        if($longitude>180 || $longitude<-180){
            return 'Please enter valid longitude value';
        }

        return 'Success';
    }
}

