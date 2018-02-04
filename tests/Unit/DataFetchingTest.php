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
        $result = $breweriesDataFetchingService->setUpBreweriesData(
            0,
            0,
            0,
            0
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
        $result = $breweriesDataFetchingService->setUpBreweriesData(
            0,
            0,
            0,
            0
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
        $result = $breweriesDataFetchingService->setUpBreweriesData(
            20.600299835205,
            49.962200164795,
            0,
            0
        );
        $this->assertEquals(count($result), 1);
    }

    /**
     * Test where longitude/latitude difference is not allowed and start point is brewery
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
        $result = $breweriesDataFetchingService->setUpBreweriesData(
            0,
            0,
            180, //longitude range is roughly -180;180
            85 //latitude range is roughly -85;85
        );
        $this->assertEquals(count($result), $breweriesCount);
    }
}
