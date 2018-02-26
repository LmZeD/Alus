<?php

namespace Tests\Unit;

use function App\Http\dataFactory;
use App\Services\FindClosestPointService;
use App\Services\RouteCalculationService;
use App\Services\ValidateCoordinatesService;
use Tests\TestCase;

class RouteCalculationServiceTest extends TestCase
{
    private $routeCalculationService;
    private $findClosestPointServiceMock;
    private $validateCoordinatesServiceMock;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->setUpMocks();
        $this->routeCalculationService = new RouteCalculationService(
            $this->findClosestPointServiceMock,
            $this->validateCoordinatesServiceMock
        );
    }

    private function setUpMocks()
    {
        $this->findClosestPointServiceMock = \Mockery::mock(FindClosestPointService::class);
        $this->validateCoordinatesServiceMock = \Mockery::mock(ValidateCoordinatesService::class);
    }

    /**
     * Test where param values provided are null
     *
     *
     * result must be empty array
     * @return void
     */
    public function testNullValues()
    {
        $startLongitude = null;
        $startLatitude = null;
        $tripDistance = null;
        $breweriesData = null;

        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(false);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(false);

        $result = $this->routeCalculationService
            ->calculateRoute($startLongitude, $startLatitude, $tripDistance, $breweriesData);

        $this->assertEmpty($result);
    }

    /**
     * Test where param values provided are not null, but breweriesData array has invalid values
     *
     *
     * result must be empty array
     * @return void
     */
    public function testInvalidBreweriesData()
    {
        $startLongitude = 10;
        $startLatitude = 10;
        $tripDistance = 1000;
        $breweriesData = [0, 0, 0, 0];
        $this->findClosestPointServiceMock->shouldReceive('findClosestPoint')->andReturn(10);
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);

        $result = $this->routeCalculationService
            ->calculateRoute($startLongitude, $startLatitude, $tripDistance, $breweriesData);

        $this->assertEquals($result, []);
    }

    /**
     * Test where param values provided are not null, but breweriesData array has invalid values
     *
     *
     * result must be array with data
     * @return void
     */
    public function testValidData()
    {
        $startLongitude = 10;
        $startLatitude = 10;
        $tripDistance = 1000;
        $breweriesData = dataFactory(10, 0);
        $this->findClosestPointServiceMock->shouldReceive('findClosestPoint')
            ->andReturn(['closestBreweryIndex' => rand(1, 9), 'closestDistance' => rand(1, 1000)]);
        $this->validateCoordinatesServiceMock->shouldReceive('isLatitudeValid')->andReturn(true);
        $this->validateCoordinatesServiceMock->shouldReceive('isLongitudeValid')->andReturn(true);

        $result = $this->routeCalculationService
            ->calculateRoute($startLongitude, $startLatitude, $tripDistance, $breweriesData);

        $this->assertNotEmpty($result);
    }
}
