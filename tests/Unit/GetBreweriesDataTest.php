<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TripController;


class GetBreweriesDataTest extends TestCase
{

    public function testNoDifferenceAllowed()//1:1000000 chance that starting location will be brewery, should return null 99.99% of the time
    {
        $trip=new TripController();
        $this->assertEmpty($trip->setUpBreweriesData(19.43295600,51.742503,
            0,0));
    }
}
