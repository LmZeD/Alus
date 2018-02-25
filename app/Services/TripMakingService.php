<?php

namespace App\Services;

use function App\Http\differenceAllowed;
use function App\Http\isDistance;
use function App\Http\validateLatitude;
use function App\Http\validateLongitude;

class TripMakingService
{
    private $breweriesDataFetchingService;
    private $routeCalculationService;

    public function __construct(
        BreweriesDataFetchingService $breweriesDataFetchingService,
        RouteCalculationService $routeCalculationService
    ) {
        $this->breweriesDataFetchingService = $breweriesDataFetchingService;
        $this->routeCalculationService = $routeCalculationService;
    }

    /**
     * Initiates calculation process
     *
     * @param $startLongitude - start point longitude
     * @param $startLatitude - start point latitude
     * @param $tripDistance - distance allowed
     *
     * @return array
     */
    public function calculateWholeTrip($startLongitude, $startLatitude, $tripDistance)
    {
        //input validation block
        if (!isDistance($tripDistance) || !validateLongitude($startLongitude) || !validateLatitude($startLatitude)) {
            return [];
        }
        $breweriesData = $this->setUpData($startLongitude, $startLatitude, $tripDistance);
        if ($breweriesData === []) {//nothing in range found
            return [];
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
        $latitudeDifferenceAllowed = differenceAllowed($tripDistance);
        $longitudeDifferenceAllowed = differenceAllowed($tripDistance);
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
}
