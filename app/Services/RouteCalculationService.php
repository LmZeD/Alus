<?php

namespace App\Services;

class RouteCalculationService
{
    private $findClosestPointService;

    public function __construct(FindClosestPointService $findClosestPointService)
    {
        $this->findClosestPointService = $findClosestPointService;
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
     */
    public function calculateRoute($startLongitude, $startLatitude, $tripDistance, $breweriesData)
    {
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
}
