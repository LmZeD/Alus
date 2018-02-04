<?php

namespace Tests\Unit;

use App\Services\DistanceCalculationService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DistanceCalculationTest extends TestCase
{
    /**
     * Test distance calculation with zeros as all parameters
     *
     * Result must be 0
     *
     * @return void
     */
    public function testZeroValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            0,
            0,
            0,
            0
        );
        $this->assertEquals($result, 0);
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
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            1,
            1,
            1,
            1
        );
        $this->assertEquals($result, 0);
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
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            1.111,
            1.111,
            1.111,
            1.111
        );
        $this->assertEquals($result, 0);
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
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            '1.111',
            '1.111',
            '1.111',
            '1.111'
        );
        $this->assertEquals($result, 0);
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
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            12.9999,
            82.9879,
            17.555,
            71.1456
        );
        $this->assertNotEquals($result, 0);
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
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            'invalidParameter',
            'invalidParameter',
            'invalidParameter',
            'invalidParameter'
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
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            185,
            90,
            185,
            90
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
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            -185,
            -90,
            -185,
            -90
        );
        $this->assertNull($result);
    }

    /**
     * Test distance calculation with values on boundaries
     *
     * Result must be null
     *
     * @return void
     */
    public function testOnBoundariesValues()
    {
        $distanceCalculationService = new DistanceCalculationService();
        $result = $distanceCalculationService->calculateDistanceBetweenTwoPoints(
            -180,
            -85,
            180,
            85
        );
        $this->assertNull($result);
    }
}
