<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function getIndex(){
        return view('input');
    }

    public function calculate(Request $request){
        //input validation

        $start_lat=$request->lat;
        $start_long=$request->long;
        //end of input validation
        $results=array();

        return view('output',['results'=>$results,'start_lat'=>$start_lat,'start_long'=>$start_long]);
    }
}
