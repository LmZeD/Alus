<?php

namespace Tests\Unit;

use App\Services\DistanceCalculationService;
use App\Services\ValidateCoordinatesService;
use Tests\TestCase;

class DistanceCalculationServiceTest extends TestCase
{
    private $distanceCalculationService;
    private $validateCoordinatesServiceMock;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->setUpMocks();
        $this->distanceCalculationService = new DistanceCalculationService(
            $this->validateCoordinatesServiceMock
        );
    }

    private function setUpMocks()
    {
        $this->validateCoordinatesServiceMock = \Mockery::mock(ValidateCoordinatesService::class);
    }
    /**
     * Test distance calculation with zeros as all parameters
     *
     * Result must be 0 (no distance between points)
     *
     * @return void
     */
    public function testZeroValues()
    {
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->
        andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->
        andReturn(true);
        $long1 = 0;
        $lat1 = 0;
        $long2 = 0;
        $lat2 = 0;

        $result = $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->
        andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->
        andReturn(true);
        $long1 = 1;
        $lat1 = 1;
        $long2 = 1;
        $lat2 = 1;

        $result = $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->
        andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->
        andReturn(true);
        $long1 = 1.111;
        $lat1 = 1.111;
        $long2 = 1.111;
        $lat2 = 1.111;

        $result = $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->
        andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->
        andReturn(true);
        $long1 = '1.111';
        $lat1 = '1.111';
        $long2 = '1.111';
        $lat2 = '1.111';

        $result = $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->
        andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->
        andReturn(true);
        $long1 = 12.9999;
        $lat1 = 82.9879;
        $long2 = 17.555;
        $lat2 = 71.1456;

        $result = $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertNotEquals(0, $result);
    }

    /**
     * Test when validation fails
     *
     * Result must be null
     *
     * @return void
     */
    public function testValidationFailed()
    {
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->
        andReturn(false);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->
        andReturn(false);
        $long1 = -185;
        $lat1 = -90;
        $long2 = -185;
        $lat2 = -90;

        $result = $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->
        andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->
        andReturn(true);
        $long1 = -180;
        $lat1 = -85;
        $long2 = 180;
        $lat2 = 85;

        $result = $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
            $long1,
            $lat1,
            $long2,
            $lat2
        );
        $this->assertNotEquals(0, $result);
    }
}
