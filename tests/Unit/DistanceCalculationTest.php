<?php

namespace Tests\Unit;

use function App\Http\validateLatitude;
use function App\Http\validateLongitude;
use App\Services\DistanceCalculationService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DistanceCalculationTest extends TestCase
{
    /**
     * Test distance calculation with zeros as all parameters
     *
     * Result must be 0 (no distance between points)
     *
     * @return void
     */
    public function testZeroValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = 0;
        $lat1 = 0;
        $long2 = 0;
        $lat2 = 0;

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertEquals(0, $result);
    }

    /**
     * Test distance calculation with equal integers as all parameters
     *
     * Result must be 0
     *
     * @return void
     */
    public function testEqualIntegerValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = 1;
        $lat1 = 1;
        $long2 = 1;
        $lat2 = 1;

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertEquals(0, $result);
    }

    /**
     * Test distance calculation with equal doubles as all parameters
     *
     * Result must be 0
     *
     * @return void
     */
    public function testEqualDoubleValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = 1.111;
        $lat1 = 1.111;
        $long2 = 1.111;
        $lat2 = 1.111;

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertEquals(0, $result);
    }

    /**
     * Test distance calculation with equal numeric strings as all parameters
     *
     * Result must be 0
     *
     * @return void
     */
    public function testEqualStringsValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = '1.111';
        $lat1 = '1.111';
        $long2 = '1.111';
        $lat2 = '1.111';

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertEquals(0, $result);
    }

    /**
     * Test distance calculation with not equal doubles
     *
     * Result must not be 0
     *
     * @return void
     */
    public function testNotEqualValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = 12.9999;
        $lat1 = 82.9879;
        $long2 = 17.555;
        $lat2 = 71.1456;

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertNotEquals(0, $result);
    }

    /**
     * Test distance calculation with 'invalidParameter' as all parameters
     *
     * Result must be null
     *
     * @return void
     */
    public function testInvalidStringValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = 'invalidParameter';
        $lat1 = 'invalidParameter';
        $long2 = 'invalidParameter';
        $lat2 = 'invalidParameter';

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertNull($result);
    }

    /**
     * Test distance calculation with outside boundaries values (too big)
     *
     * Result must be null
     *
     * @return void
     */
    public function testTooBigInvalidValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = 185;
        $lat1 = 90;
        $long2 = 185;
        $lat2 = 90;

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertNull($result);
    }

    /**
     * Test distance calculation with outside boundaries values (too low)
     *
     * Result must be null
     *
     * @return void
     */
    public function testTooLowInvalidValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = -185;
        $lat1 = -90;
        $long2 = -185;
        $lat2 = -90;

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertNull($result);
    }

    /**
     * Test distance calculation with values on boundaries
     *
     * Result must not be 0
     *
     * @return void
     */
    public function testOnBoundariesValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $long1 = -180;
        $lat1 = -85;
        $long2 = 180;
        $lat2 = 85;

        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertNotEquals(0, $result);
    }
}
