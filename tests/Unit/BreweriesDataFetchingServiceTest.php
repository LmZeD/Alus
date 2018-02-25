<?php

namespace Tests\Unit;

use App\Services\BreweriesDataFetchingService;
use App\Services\DistanceCalculationService;
use Tests\TestCase;
use App\Brewery;

class BreweriesDataFetchingServiceTest extends TestCase
{
    private $breweriesDataFetchingService;
    private $distanceCalculationServiceMock;

    public function __construct(
        string $name = null,
        array $data = [],
        string $dataName = ''
    ) {
        parent::__construct($name, $data, $dataName);
        $this->setUpMocks();
        $this->breweriesDataFetchingService = new BreweriesDataFetchingService($this->distanceCalculationServiceMock);
    }

    protected function setUpMocks()
    {
        $this->distanceCalculationServiceMock = \Mockery::mock(DistanceCalculationService::class);
    }

    /**
     * Test where zero values are passed as all arguments
     *
     * Result should be empty array
     *
     * @return void
     */
    public function testZeroValues()
    {

        $longitude = 0;
        $latitude = 0;
        $longitudeDifferenceAllowed = 0;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 0;//latitude range is roughly -85;85

        $result = $this->breweriesDataFetchingService->setUpBreweriesData(
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

        $longitude = 80;
        $latitude = 60;
        $longitudeDifferenceAllowed = 0;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 0;//latitude range is roughly -85;85

        $result = $this->breweriesDataFetchingService->setUpBreweriesData(
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
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('0');
        $longitude = 20.600299835205;
        $latitude = 49.962200164795;
        $longitudeDifferenceAllowed = 0;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 0;//latitude range is roughly -85;85

        $result = $this->breweriesDataFetchingService->setUpBreweriesData(
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
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->once()->andReturn('0');
        $breweries = new Brewery();
        $breweriesCount = $breweries->getBreweriesWithCoordinatesCount();
        $longitude = 0;
        $latitude = 0;
        $longitudeDifferenceAllowed = 180;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 85;//latitude range is roughly -85;85

        $result = $this->breweriesDataFetchingService->setUpBreweriesData(
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
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->andReturn('0');
        $breweries = new Brewery();
        $breweriesCount = $breweries->getBreweriesWithCoordinatesCount();
        $longitude = 0;
        $latitude = 0;
        $longitudeDifferenceAllowed = 1800;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 850;//latitude range is roughly -85;85

        $result = $this->breweriesDataFetchingService->setUpBreweriesData(
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
        $this->distanceCalculationServiceMock->shouldReceive('calculateDistanceBetweenTwoPoints')
            ->andReturn('0');
        $breweries = new Brewery();
        $breweriesCount = $breweries->getBreweriesWithCoordinatesCount();
        $longitude = 100;
        $latitude = -60;
        $longitudeDifferenceAllowed = 1800;//longitude range is roughly -180;180
        $latitudeDifferenceAllowed = 850;//latitude range is roughly -85;85

        $result = $this->breweriesDataFetchingService->setUpBreweriesData(
            $longitude,
            $latitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        $this->assertEquals($breweriesCount, count($result));
    }
}
