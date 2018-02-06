<?php

namespace Tests\Unit;

use function App\Http\isDistance;
use function App\Http\isValidNumber;
use App\Services\TripMakingService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TripMakingTest extends TestCase
{
    /**
     * calculateWholeTrip test with invalid argument data provided
     *
     * @return void
     */
    public function testInvalidData()
    {
        $tripMakingService = new TripMakingService();
        $startLongitude = '100ab';//'1000'
        $startLatitude = 1000.484;
        $tripDistance = -2000;

        $result = $tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);

        $this->assertEmpty($result);
    }

    /**
     * calculateWholeTrip test with valid on boundaries data provided and starting point isn't brewery
     *
     * result array must contain key 'maxTripDistance' with value $tripDistance (0)
     *
     * @return void
     */
    public function testValidOnBoundariesData()
    {
        $tripMakingService = new TripMakingService();
        $startLongitude = 180.000;//-180
        $startLatitude = -85.000;//85
        $tripDistance = 0;
        $result = $tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);

        $this->assertEquals($tripDistance, $result['tripDistance']);
    }

    /**
     * calculateWholeTrip test with valid data provided but no breweries in range
     *
     * result must have empty usedIndexes array
     *
     * @return void
     */
    public function testValidDataWithNoBreweriesInRange()
    {
        $tripMakingService = new TripMakingService();
        $startLongitude = -179.15;
        $startLatitude = -80.484;
        $tripDistance = 2000;
        $result = $tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);
        $this->assertEmpty($result['usedIndexes']);
    }

    /**
     * calculateWholeTrip test with valid data provided and there are breweries in range
     *
     * result must have not empty usedIndexes array
     *
     * @return void
     */
    public function testValidDataWithBreweriesInRange()
    {
        $tripMakingService = new TripMakingService();
        $startLongitude = 19.51651;
        $startLatitude = 51.484;
        $tripDistance = 2000;
        $result = $tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);

        $this->assertNotEmpty($result['usedIndexes']);
    }

    /**
     * calculateWholeTrip test with valid data provided but there are no trip distance
     *
     * result must have empty usedIndexes array
     *
     * @return void
     */
    public function testValidDataWithNoTripDistance()
    {
        $tripMakingService = new TripMakingService();
        $startLongitude = 19.51651;
        $startLatitude = 51.484;
        $tripDistance = 0;
        $result = $tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);

        $this->assertEmpty($result['usedIndexes']);
    }

    /**
     * calculateWholeTrip test with valid data provided and there are breweries in range
     *
     * result must have usedIndexes array with one element there
     *
     * @return void
     */
    public function testValidDataWithNoTripDistanceAndStartPointIsBrewery()
    {
        $tripMakingService = new TripMakingService();
        $startLongitude = 20.600299835205;
        $startLatitude = 49.962200164795;
        $tripDistance = 0;
        $result = $tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);

        $this->assertEquals(1, count($result['usedIndexes']));
    }
}
