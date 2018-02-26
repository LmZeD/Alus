<?php

namespace App\Services;

use function App\Http\isDistance;

class RouteCalculationService
{
    private $findClosestPointService;
    private $validateCoordinatesService;

    public function __construct(
        FindClosestPointService $findClosestPointService,
        ValidateCoordinatesService $validateCoordinatesService
    ) {
        $this->findClosestPointService = $findClosestPointService;
        $this->validateCoordinatesService = $validateCoordinatesService;
    }

    /**
     *  Calculates best route using logic 'closest neighbor'
     *
     * @param $startLongitude - start point longitude
     * @param $startLatitude - start point latitude
     * @param $tripDistance - allowed trip distance
     * @param $breweriesData - data of breweries in range
     *
     * @return array contains: usedIndexes, distanceLeft, breweriesData
     *
     */
    public function calculateRoute($startLongitude, $startLatitude, $tripDistance, $breweriesData)
    {
        if (!$this->validateParams($startLongitude, $startLatitude, $tripDistance, $breweriesData)) {
            return [];
        }
        $currentLong = $startLongitude;
        $currentLat = $startLatitude;
        $usedIndexes = [];//contains indexes of visited breweries
        $distanceLeft = $tripDistance;//setting up starting data
        $i = 0;//index for usedIndexes array
        while ($this->findClosestPointService->
            findClosestPoint($currentLong, $currentLat, $usedIndexes, $distanceLeft, $breweriesData) != null) {
            //while closest point exists and you can go back home after visiting it
            $closestData = $this->findClosestPointService->findClosestPoint(//finds closest point
                $currentLong,
                $currentLat,
                $usedIndexes,
                $distanceLeft,
                $breweriesData
            );

            if (in_array($closestData['closestBreweryIndex'], $usedIndexes)) {
                return [
                    'usedIndexes' => $usedIndexes,
                    'distanceLeft' => $distanceLeft,
                    'breweriesData' => $breweriesData
                ];
            }
            $usedIndexes[$i] = $closestData['closestBreweryIndex'];//inserts index of found point to visited indexes
            $distanceLeft = $distanceLeft - $closestData['closestDistance'];//subtracts trip distance
            //setting up values for next iteration

            $breweriesData[$closestData['closestBreweryIndex']]['distance'] = $closestData['closestDistance'];

            $currentLat = $breweriesData[$closestData['closestBreweryIndex']]['latitude'];
            $currentLong = $breweriesData[$closestData['closestBreweryIndex']]['longitude'];
            $i++;
        }
        return ['usedIndexes' => $usedIndexes, 'distanceLeft' => $distanceLeft, 'breweriesData' => $breweriesData];
    }

    private function validateParams($startLongitude, $startLatitude, $tripDistance, $breweriesData)
    {
        if (!$this->validateCoordinatesService->isLatitudeValid($startLatitude) ||
            !$this->validateCoordinatesService->isLongitudeValid($startLongitude) ||
            !isDistance($tripDistance) ||
            !is_array($breweriesData) ||
            (count($breweriesData) == 0 ||
            !$this->validateBreweriesData($breweriesData))
        ) {
            return false;
        }
        return true;
    }

    private function validateBreweriesData($breweriesData)
    {
        if (!str_contains(json_encode($breweriesData), 'brewery') ||
            !str_contains(json_encode($breweriesData), 'beersCount') ||
            !str_contains(json_encode($breweriesData), 'latitude') ||
            !str_contains(json_encode($breweriesData), 'longitude') ||
            !str_contains(json_encode($breweriesData), 'distanceFromHome')
        ) {
            return false;
        }
        return true;
    }
}
