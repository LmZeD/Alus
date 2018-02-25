<?php

namespace Tests\Unit;

use function App\Http\dataFactory;
use function App\Http\isValidNumber;
use App\Services\BreweriesDataFetchingService;
use App\Services\RouteCalculationService;
use App\Services\TripMakingService;
use Tests\TestCase;

class TripMakingServiceTest extends TestCase
{
    private $tripMakingService;
    private $breweriesDataFetchingMock;
    private $routeCalculationServiceMock;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->setUpMocks();
        $this->tripMakingService = new TripMakingService(
            $this->breweriesDataFetchingMock,
            $this->routeCalculationServiceMock
        );
    }

    public function setUpMocks()
    {
        $this->breweriesDataFetchingMock = \Mockery::mock(BreweriesDataFetchingService::class);
        $this->routeCalculationServiceMock = \Mockery::mock(RouteCalculationService::class);
    }

    /**
     * calculateWholeTrip test with invalid argument data provided
     *
     * @return void
     */
    public function testInvalidData()
    {
        $startLongitude = '100ab';//'1000'
        $startLatitude = 1000.484;
        $tripDistance = -2000;

        $result = $this->tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);

        $this->assertEmpty($result);
    }

    /**
     *  Values provided and received are on boundaries
     *
     * result array must contain key 'maxTripDistance' with value $tripDistance (0)
     *
     * @return void
     */
    public function testValidOnBoundariesData()
    {
        $this->breweriesDataFetchingMock->shouldReceive('setUpBreweriesData')->once()
            ->andReturn(dataFactory(10, 0));
        $this->routeCalculationServiceMock->shouldReceive('calculateRoute')->once()
            ->andReturn([
                'usedIndexes' => [],
                'distanceLeft' => 0,
                'breweriesData' => dataFactory(10, 0)]);
        $startLongitude = 180.000;//-180
        $startLatitude = -85.000;//85
        $tripDistance = 0;
        $result = $this->tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);

        $this->assertEquals($tripDistance, $result['tripDistance']);
    }

    /**
     * calculateWholeTrip test with valid data provided but no breweries in range
     *
     * result must have empty usedIndexes array
     *
     * @return void
     */
    public function testValidData()
    {
        $this->breweriesDataFetchingMock->shouldReceive('setUpBreweriesData')->once()
            ->andReturn(dataFactory(10, 0));
        $this->routeCalculationServiceMock->shouldReceive('calculateRoute')->once()
            ->andReturn([
                'usedIndexes' => [1, 2, 54],
                'distanceLeft' => 1000,
                'breweriesData' => dataFactory(10, 0)]);
        $startLongitude = -179.15;
        $startLatitude = -80.484;
        $tripDistance = 2000;
        $result = $this->tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);
        $this->assertNotEmpty($result);
    }
}
