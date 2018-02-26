<?php

namespace Tests\Unit;

use function App\Http\dataFactory;
use App\Services\DistanceCalculationService;
use App\Services\FindClosestPointService;
use App\Services\ValidateCoordinatesService;
use Tests\TestCase;

class FindClosestPointServiceTest extends TestCase
{
    private $findClosestPointService;
    private $distanceCalculationServiceMock;
    private $validateCoordinatesServiceMock;

    public function __construct(
        string $name = null,
        array $data = [],
        string $dataName = ''
    ) {
        parent::__construct($name, $data, $dataName);
        $this->setUpMocks();
        $this->findClosestPointService = new FindClosestPointService(
            $this->distanceCalculationServiceMock,
            $this->validateCoordinatesServiceMock
        );
    }

    protected function setUpMocks()
    {
        $this->validateCoordinatesServiceMock = \Mockery::mock(ValidateCoordinatesService::class);
        $this->distanceCalculationServiceMock = \Mockery::mock(DistanceCalculationService::class);
    }

    /**
     * Test where all arguments passed as null
     *
     * result must be null
     *
     * @return void
     */
    public function testNullAsAllInputs()
    {
        $currentLong = null;
        $currentLat = null;
        $usedIndexes = null;
        $distanceLeft = null;
        $breweriesData = null;
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(false);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(false);
        $result = $this->findClosestPointService->findClosestPoint(
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
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')->
            once()->andReturn('0');
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);
        $currentLong = 10.10;
        $currentLat = 10.55;
        $usedIndexes = null;
        $distanceLeft = 1000;
        $breweriesData = null;

        $result = $this->findClosestPointService->findClosestPoint(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('0');
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;
        $breweriesData = [];

        $result = $this->findClosestPointService->findClosestPoint(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('10');
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;

        $breweriesData = dataFactory(1, 0);

        $result = $this->findClosestPointService->findClosestPoint(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('10');
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;
        $offset = 1000;

        $breweriesData = dataFactory(1, $offset);

        $result = $this->findClosestPointService->findClosestPoint(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('10');
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 1000;
        $offset = 1000;

        $breweriesData = dataFactory(1, $offset);

        $result = $this->findClosestPointService->findClosestPoint(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('10');
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;

        $breweriesData = dataFactory(10, 0);

        $result = $this->findClosestPointService->findClosestPoint(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('10');
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 0;
        $offset = 1000;

        $breweriesData = dataFactory(10, $offset);

        $result = $this->findClosestPointService->findClosestPoint(
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
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('10');
        $currentLong = 0;
        $currentLat = 0;
        $usedIndexes = [];
        $distanceLeft = 1000;
        $offset = 1000;

        $breweriesData = dataFactory(10, $offset);

        $result = $this->findClosestPointService->findClosestPoint(
            $currentLong,
            $currentLat,
            $usedIndexes,
            $distanceLeft,
            $breweriesData
        );

        $this->assertNotNull($result);
    }
}
