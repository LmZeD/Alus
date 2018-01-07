<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TripController;

class DistanceTest extends TestCase
{

    public function testNullInputGiven(){
        $trip=new TripController();
        $this->assertEquals($trip->calculateDistanceBetweenTwoPoints('','','',''),'fail');
    }

    public function testStringInputGiven(){
        $trip=new TripController();
        $this->assertEquals($trip->calculateDistanceBetweenTwoPoints('string',
            'string','string','string'),'fail');
    }

    public function testValidInputGiven(){
        $trip=new TripController();
        $this->assertEquals($trip->calculateDistanceBetweenTwoPoints('51.74250300','19.43295600',
            '49.96220016','20.60029984'),'226.883');
    }

}
