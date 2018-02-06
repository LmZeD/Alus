<?php

namespace Tests\Unit;

use App\Services\BreweriesDataFetchingService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Brewery;

class DataFetchingTest extends TestCase
{

    /**
     * Test where zero values are passed as all arguments
     *
     * Result should be empty array
     *
     * @return void
     */
    public function testZeroValues()
    {
        $breweriesDataFetchingService = new BreweriesDataFetchingService();
        $longitude = 0;
        $latitude = 0;
        $longitudeDifferenceAllowed = 0;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 0;//latitude range is roughly -85;85

        $result = $breweriesDataFetchingService->setUpBreweriesData(
            $longitude,
            $latitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        $this->assertEmpty($result);
    }

    /**
     * Test where longitude/latitude difference is not allowed and start point isn't brewery
     *
     * Result should be empty array
     *
     * @return void
     */
    public function testZeroDifferenceAllowedAndStartIsNotBrewery()
    {
        $breweriesDataFetchingService = new BreweriesDataFetchingService();
        $longitude = 80;
        $latitude = 60;
        $longitudeDifferenceAllowed = 0;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 0;//latitude range is roughly -85;85

        $result = $breweriesDataFetchingService->setUpBreweriesData(
            $longitude,
            $latitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        $this->assertEmpty($result);
    }

    /**
     * Test where longitude/latitude difference is not allowed and start point is brewery
     *
     * Result should be array with 1 element
     *
     * @return void
     */
    public function testZeroDifferenceAllowedAndStartIsBrewery()
    {
        $breweriesDataFetchingService = new BreweriesDataFetchingService();
        $longitude = 20.600299835205;
        $latitude = 49.962200164795;
        $longitudeDifferenceAllowed = 0;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 0;//latitude range is roughly -85;85

        $result = $breweriesDataFetchingService->setUpBreweriesData(
            $longitude,
            $latitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        $this->assertEquals(1, count($result));
    }

    /**
     * Test where longitude/latitude difference is maximum
     *
     * Result should be array with all breweries (breweries with coordinates in database available)
     *
     * @return void
     */
    public function testAllGlobeTrip()
    {
        $breweries = new Brewery();
        $breweriesCount = $breweries->getBreweriesWithCoordinatesCount();
        $breweriesDataFetchingService = new BreweriesDataFetchingService();
        $longitude = 0;
        $latitude = 0;
        $longitudeDifferenceAllowed = 180;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 85;//latitude range is roughly -85;85

        $result = $breweriesDataFetchingService->setUpBreweriesData(
            $longitude,
            $latitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        $this->assertEquals($breweriesCount, count($result));
    }

    /**
     * Test where longitude/latitude difference is over maximum
     *
     * Result should be array with all breweries (breweries with coordinates in database available)
     * over maximum value must not affect calculations
     *
     * @return void
     */
    public function testAllGlobeTripWithTooBigDifferenceAllowed()
    {
        $breweries = new Brewery();
        $breweriesCount = $breweries->getBreweriesWithCoordinatesCount();
        $breweriesDataFetchingService = new BreweriesDataFetchingService();
        $longitude = 0;
        $latitude = 0;
        $longitudeDifferenceAllowed = 1800;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 850;//latitude range is roughly -85;85

        $result = $breweriesDataFetchingService->setUpBreweriesData(
            $longitude,
            $latitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        $this->assertEquals($breweriesCount, count($result));
    }

    /**
     * Test where longitude/latitude difference is over maximum and start point is not 0;0
     *
     * Result should be array with all breweries (breweries with coordinates in database available)
     * over maximum value must not affect calculations
     *
     * @return void
     */
    public function testAllGlobeTripWithTooBigDifferenceAllowedAndCustomStartPoint()
    {
        $breweries = new Brewery();
        $breweriesCount = $breweries->getBreweriesWithCoordinatesCount();
        $breweriesDataFetchingService = new BreweriesDataFetchingService();
        $longitude = 100;
        $latitude = -60;
        $longitudeDifferenceAllowed = 1800;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 850;//latitude range is roughly -85;85

        $result = $breweriesDataFetchingService->setUpBreweriesData(
            $longitude,
            $latitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        $this->assertEquals($breweriesCount, count($result));
    }
}
