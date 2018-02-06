<?php

namespace Tests\Unit;

use App\Services\TripMakingService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FindClosestPointTest extends TestCase
{
    /**
     * Test where all arguments passed as null
     *
     * result must be null
     *
     * @return void
     */
    public function testNullAsAllInputs()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = null;
        $currentLat = null;
        $usedIndexes = null;
        $distanceLeft = null;
        $breweriesData = null;

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertNull($result);
    }

    /**
     * Test where array type arguments passed as null, other values are valid
     *
     * result must be null
     *
     * @return void
     */
    public function testNullAsArrayInputs()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = 10.10;
        $currentLat = 10.55;
        $usedIndexes = null;
        $distanceLeft = 1000;
        $breweriesData = null;

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertNull($result);
    }

    /**
     * Test where all arguments are zero (or empty array)
     *
     * result must be null
     *
     * @return void
     */
    public function testValidZeroInputs()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;
        $breweriesData = [];

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertNull($result);
    }

    /**
     * Test where only one point is available and point index is 0
     *
     * result must be 0
     *
     * @return void
     */
    public function testOnlyOnePointAvailableAndIndexIsZero()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;
        $breweriesData = [];
        for ($i = 0; $i < 1; $i++) {
            $breweriesData[$i]['beersCount'] = $i * 2;
            $breweriesData[$i]['breweryId'] = 9999;
            $breweriesData[$i]['latitude'] = $i * 0.321 + 1;
            $breweriesData[$i]['longitude'] = $i * 0.123 + 1;
            $breweriesData[$i]['distanceFromHome'] = 5 * $i;
        }

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertEquals($result['usedIndexes'][0], 0);
    }

    /**
     * Test where only one point is available and point index is not 0 but distance left is 0
     *
     * result must be null
     *
     * @return void
     */
    public function testOnlyOnePointAvailableAndIndexIsNotZeroButDistanceLeftISZero()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;
        $breweriesData = [];
        $offset = 1000;
        for ($i = 0; $i < 1; $i++) {
            $breweriesData[$i + $offset]['beersCount'] = $i * 2;
            $breweriesData[$i + $offset]['breweryId'] = 9999;
            $breweriesData[$i + $offset]['latitude'] = $i * 0.321 + 1;
            $breweriesData[$i + $offset]['longitude'] = $i * 0.123 + 1;
            $breweriesData[$i + $offset]['distanceFromHome'] = 5 * $i;
        }

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertNull($result);
    }

    /**
     * Test where only one point is available and point index is not 0 but distance left is 0
     *
     * result must be offset (this case 1000)
     *
     * @return void
     */
    public function testOnlyOnePointAvailableAndIndexIsNotZero()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 1000;
        $breweriesData = [];
        $offset = 1000;
        for ($i = 0; $i < 1; $i++) {
            $breweriesData[$i + $offset]['beersCount'] = $i * 2;
            $breweriesData[$i + $offset]['breweryId'] = 9999;
            $breweriesData[$i + $offset]['latitude'] = $i * 0.321 + 1;
            $breweriesData[$i + $offset]['longitude'] = $i * 0.123 + 1;
            $breweriesData[$i + $offset]['distanceFromHome'] = 5 * $i;
        }

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertEquals($result['closestBreweryIndex'], $offset);
    }

    /**
     * Test where many points are available but distance left is 0
     *
     * result must be null
     *
     * @return void
     */
    public function testManyPointsAvailableButNoTripDistance()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;
        $breweriesData = [];
        $offset = 1000;
        for ($i = 0; $i < 10; $i++) {
            $breweriesData[$i]['beersCount'] = $i * 2;
            $breweriesData[$i]['breweryId'] = 9999;
            $breweriesData[$i]['latitude'] = $i * 0.321 + 1;
            $breweriesData[$i]['longitude'] = $i * 0.123 + 1;
            $breweriesData[$i]['distanceFromHome'] = 5 * $i;
        }

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertNull($result);
    }

    /**
     * Test where many points are available but start index is not 0 and distance left is 0
     *
     * result must be null
     *
     * @return void
     */
    public function testManyPointsAvailableWithOffsetButNoDistanceLeft()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;
        $breweriesData = [];
        $offset = 1000;
        for ($i = 0; $i < 10; $i++) {
            $breweriesData[$i + $offset]['beersCount'] = $i * 2;
            $breweriesData[$i + $offset]['breweryId'] = 9999;
            $breweriesData[$i + $offset]['latitude'] = $i * 0.321 + 1;
            $breweriesData[$i + $offset]['longitude'] = $i * 0.123 + 1;
            $breweriesData[$i + $offset]['distanceFromHome'] = 5 * $i;
        }

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertNull($result);
    }

    /**
     * Test where many points are available but start index is not 0
     *
     * result must be not null
     *
     * @return void
     */
    public function testManyPointsAvailableWithOffset()
    {
        $tripMakingService = new TripMakingService();
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 1000;
        $breweriesData = [];
        $offset = 1000;
        for ($i = 0; $i < 10; $i++) {
            $breweriesData[$i + $offset]['beersCount'] = $i * 2;
            $breweriesData[$i + $offset]['breweryId'] = 9999;
            $breweriesData[$i + $offset]['latitude'] = $i * 0.321 + 1;
            $breweriesData[$i + $offset]['longitude'] = $i * 0.123 + 1;
            $breweriesData[$i + $offset]['distanceFromHome'] = 5 * $i;
        }

        $result = $tripMakingService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertNotNull($result);
    }
}
