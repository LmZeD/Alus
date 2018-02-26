<?php

namespace App\Services;

use App\Exceptions\NoBreweriesFoundException;
use function App\Http\isDistance;

class TripMakingService
{
    private $breweriesDataFetchingService;
    private $routeCalculationService;
    private $validateCoordinatesService;

    public function __construct(
        BreweriesDataFetchingService $breweriesDataFetchingService,
        RouteCalculationService $routeCalculationService,
        ValidateCoordinatesService $validateCoordinatesService
    ) {
        $this->breweriesDataFetchingService = $breweriesDataFetchingService;
        $this->routeCalculationService = $routeCalculationService;
        $this->validateCoordinatesService = $validateCoordinatesService;
    }

    /**
     * Initiates calculation process
     *
     * @param $startLongitude - start point longitude
     * @param $startLatitude - start point latitude
     * @param $tripDistance - distance allowed
     *
     * @return array
     * @throws NoBreweriesFoundException
     */
    public function calculateWholeTrip($startLongitude, $startLatitude, $tripDistance)
    {
        if (!$this->validateInputFields($startLongitude, $startLatitude, $tripDistance)) {
            throw new NoBreweriesFoundException();
        }
        $breweriesData = $this->setUpData($startLongitude, $startLatitude, $tripDistance);
        if ($breweriesData === []) {//nothing in range found
            throw new NoBreweriesFoundException();
        }
        $routeData = $this->calculateRouteData($startLongitude, $startLatitude, $tripDistance, $breweriesData);

        $usedIndexes = $routeData['usedIndexes'];
        $distanceLeft = $routeData['distanceLeft'];
        $breweriesData = $routeData['breweriesData'];

        return [
            'usedIndexes' => $usedIndexes,
            'breweriesData' => $breweriesData,
            'distanceLeft' => $distanceLeft,
            'startLatitude' => $startLatitude,
            'startLongitude' => $startLongitude,
            'tripDistance' => $tripDistance
        ];
    }

    private function setUpData($startLongitude, $startLatitude, $tripDistance)
    {
        $latitudeDifferenceAllowed = $this->differenceAllowed($tripDistance);
        $longitudeDifferenceAllowed = $this->differenceAllowed($tripDistance);
        $breweriesData = $this->breweriesDataFetchingService->setUpBreweriesData(
            $startLongitude,
            $startLatitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        return $breweriesData;
    }

    //maybe this should go to 'calculateWholeTrip' method? On the other hand code looks much cleaner.
    private function calculateRouteData($startLongitude, $startLatitude, $tripDistance, $breweriesData)
    {
        $routeData = $this->routeCalculationService->calculateRoute(
            $startLongitude,
            $startLatitude,
            $tripDistance,
            $breweriesData
        );
        return $routeData;
    }

    private function validateInputFields($startLongitude, $startLatitude, $tripDistance)
    {
        if (!isDistance($tripDistance) ||
            !$this->validateCoordinatesService->isLongitudeValid($startLongitude) ||
            !$this->validateCoordinatesService->isLatitudeValid($startLatitude)) {
            return false;
        }
        return true;
    }

    private function differenceAllowed($tripDistance)
    {
        return $tripDistance / 100 + 1;
    }
}
