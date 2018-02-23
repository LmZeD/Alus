<?php

namespace App\Services;

use function App\Http\differenceAllowed;
use function App\Http\isDistance;
use function App\Http\validateLatitude;
use function App\Http\validateLongitude;

/**
*  Calculates best route using logic 'closest neighbor'
*
* @param $currentLong - current point longitude
* @param $currentLat - current point latitude
* @param $usedIndexes - array which contains indexes of visited breweries
* @param $distanceLeft - distance left for traveling
* @param $breweriesData - data of breweries in range
*
* @return array - contains: closest brewery index, distance to closest brewery
*/
class FindClosestPointService
{
    private $distanceCalculationService;

    public function __construct(DistanceCalculationService $distanceCalculationService)
    {
        $this->distanceCalculationService = $distanceCalculationService;
    }

    public function findClosestPoint(
        $currentLong,
        $currentLat,
        $usedIndexes,
        $distanceLeft,
        $breweriesData
    ) {
        //validation block
        if (!validateLongitude($currentLong) || !validateLatitude($currentLat) || !is_array($breweriesData)
            || !isDistance($distanceLeft) || !is_array($usedIndexes)) {
            return null;
        }
        reset($breweriesData);
        $first_key = key($breweriesData);

        $closestData = null;//holder for return
        $closestIndex = -1;//index of closest brewery
        $index = $first_key;//current index
        $closestDistance = 999999;//distance to closest brewery
        foreach ($breweriesData as $data) {
            $distance = $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
                $currentLong,
                $currentLat,
                $data['longitude'],
                $data['latitude']
            );
            if (!($distance === 'fail') && $distance < $closestDistance && !in_array($index, $usedIndexes)) {
                $closestDistance = $distance;
                $closestIndex = $index;
            }
            $index++;
        }
        if ($closestIndex == -1) {//nothing in range found
            return null;
        }
        if ($closestIndex != -1 &&
            $distanceLeft < $closestDistance + $breweriesData[$closestIndex]['distanceFromHome']
        ) {
            return null;
        }
        if ($closestDistance > $distanceLeft) {
            return null;
        }
        //if statements passed, setting up data to return
        $closestData['closestBreweryIndex'] = $closestIndex;
        $closestData['closestDistance'] = $closestDistance;
        return $closestData;
    }
}
