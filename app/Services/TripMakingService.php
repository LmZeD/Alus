<?php

namespace App\Services;

use function App\Http\differenceAllowed;
use function App\Http\isDistance;
use function App\Http\validateLatitude;
use function App\Http\validateLongitude;

class TripMakingService
{
    /**
     *  Initiates calculation process
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
        //preparing data
        $latitudeDifferenceAllowed = differenceAllowed($tripDistance);
        $longitudeDifferenceAllowed = differenceAllowed($tripDistance);

        $breweriesDataFetchingService = new BreweriesDataFetchingService();
        $breweriesData = $breweriesDataFetchingService->setUpBreweriesData(
            $startLongitude,
            $startLatitude,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        //end of preparing data

        //start of calculations
        $routeData = $this->calculateRoute(
            $startLongitude,
            $startLatitude,
            $tripDistance,
            $breweriesData
        );

        $usedIndexes = $routeData['usedIndexes'];
        $distanceLeft = $routeData['distanceLeft'];
        $breweriesData = $routeData['breweriesData'];
        //end of calculations

        return [
            'usedIndexes' => $usedIndexes,
            'breweriesData' => $breweriesData,
            'distanceLeft' => $distanceLeft,
            'startLatitude' => $startLatitude,
            'startLongitude' => $startLongitude,
            'tripDistance' => $tripDistance
        ];
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
        while ($this->findClosestPoint($currentLong, $currentLat, $usedIndexes, $distanceLeft, $breweriesData) !=
            null) {
            //while closest point exists and you can go back home after visiting it
            $closestData = $this->findClosestPoint(//finds closest point
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
        $distanceCalculatingService = new DistanceCalculationService();
        foreach ($breweriesData as $data) {
            $distance = $distanceCalculatingService->calculateDistanceBetweenTwoPoints(
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
