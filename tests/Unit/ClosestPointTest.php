<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TripController;
use App\Brewery;

class ClosestPointTest extends TestCase
{

    public function testNoDistanceLeft()
    {
        $trip=new TripController();
        $breweries_data=$trip->setUpBreweriesData(19.43295600,51.742503,10,10);
        $this->assertTrue(empty($trip->findClosestPoint(19.43295600,51.742503,[],
            0,$breweries_data)));
    }

    public function testVeryLongDistance()//distance left will be very big number
    {
        $trip=new TripController();
        $breweries_data=$trip->setUpBreweriesData(19.43295600,51.742503,10,10);
        $this->assertNotNull($trip->findClosestPoint(19.43295600,51.742503,[],
            9999999,$breweries_data));
    }

    public function testInvalidLatLong(){
        $trip=new TripController();
        $breweries_data=$trip->setUpBreweriesData(19.43295600,51.742503,10,10);
        $this->assertEquals($trip->findClosestPoint('string','string',[],
            9999999,$breweries_data),null);
    }

    public function testSouthPoleAsStartPoint(){//-60,-10
        $trip=new TripController();
        $breweries_data=$trip->setUpBreweriesData(19.43295600,51.742503,10,10);
        $this->assertNull($trip->findClosestPoint(-10,-60,[],
            2000,$breweries_data));
    }

    public function testNonExistingCoordinates(){
        $trip=new TripController();
        $breweries_data=$trip->setUpBreweriesData(19.43295600,51.742503,10,10);
        $this->assertNull($trip->findClosestPoint(-100,-600,[],
            2000,$breweries_data));
    }

    public function testAllPointsVisited(){
        $array_of_indexes=array();
        for ($i=0;$i<2000;$i++){
            $array_of_indexes[$i]=$i;
        }
        $trip=new TripController();
        $breweries_data=$trip->setUpBreweriesData(19.43295600,51.742503,10,10);
        $this->assertNull($trip->findClosestPoint(-1,-6,$array_of_indexes,
            2000,$breweries_data));
    }

    public function testNotGivenStartPoints(){
        $trip=new TripController();
        $breweries_data=$trip->setUpBreweriesData(19.43295600,51.742503,10,10);
        $this->assertNull($trip->findClosestPoint('','',[],
            2000,$breweries_data));
    }
}
