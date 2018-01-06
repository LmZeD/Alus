<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TripController extends Controller
{
    public function getIndex(){
        return view('input_screen');
    }

    public function makeATrip(Request $request){
        //input validation
        $validationMsg=$this->validateInputFields($request->longitude,$request->latitude);
        if($validationMsg!='Success'){
            return redirect(route('trip.index'))->with('error',$validationMsg);
        }
        //end of input validation

        $start_latitude=$request->latitude;
        $start_longitude=$request->longitude;

         dd($this->calculateDistanceBetweenTwoPoints($start_longitude,$start_latitude,
             $start_longitude+1,$start_latitude+1));

        $results=array();
        return view('output_screen',['results'=>$results,'start_latitude'=>$start_latitude,
            'start_longitude'=>$start_longitude]);
    }

    private function calculateDistanceBetweenTwoPoints($long1,$lat1,$long2,$lat2){
        //[-0.116773, 51.510357], [-77.009003, 38.889931]
//        $long1=-0.116773;
//        $lat1=51.5103571;
//        $long2=-77.0090013;
//        $lat2=38.889931;

        $lat1=round($lat1,7);
        $lat2=round($lat2,7);
        $long1=round($long1,7);
        $long2=round($long2,7);


        $R = 6371000;// radius of Earth in meters
        $phi_1 = deg2rad($lat1);
        $phi_2 = deg2rad($lat2);

        $delta_phi = deg2rad($lat2 - $lat1);
        $delta_lambda = deg2rad($long2 - $long1);

        $a = pow(sin($delta_phi / 2.0),2) + cos($phi_1) * cos($phi_2) * pow(sin($delta_lambda / 2.0),2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $meters = $R * $c;
        $km = $meters / 1000.0;

        $km = round($km, 3);

        return $km;
    }

    private function validateInputFields($longitude,$latitude){
        if($latitude == null){
            return 'Please fill latitude field';
        }
        if($longitude == null){
            return 'Please fill longitude field';
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

