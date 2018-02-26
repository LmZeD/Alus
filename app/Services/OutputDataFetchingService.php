<?php

namespace App\Services;

use function App\Http\isDistance;
use ErrorException;

class OutputDataFetchingService
{
    /**
     * Fetches data after calculations
     *
     * @param $usedIndexes - array which contains indexes of visited breweries
     * @param $breweriesData - array of visited breweries
     * @param $distanceLeft - distance left after trip
     * @param $startLong - value of starting longitude
     * @param $startLat - value of starting latitude
     * @param $tripDistance - value of allowed trip distance
     *
     * @return array
     */
    public function fetchDataForOutput(
        $usedIndexes,
        $breweriesData,
        $distanceLeft,
        $startLong,
        $startLat,
        $tripDistance
    ) {
        $i = 0;//index for results
        $results = [];//to store data for return
        $beerCount = 0;//for output, since I'm already merging I can count as well
        try {
            foreach ($usedIndexes as $index) {
                $results = $this->getBeerAndBreweryDataByIndex($results, $index, $i, $breweriesData);
                if (array_key_exists($i, $results)) {
                    $beerCount = $beerCount + count($results[$i]['beer']);
                }
                $i++;
            }
        } catch (ErrorException $ex) {
            return null;
        }

        if (is_array($results) && $results != null) {
            //home location and additional data for output
            $results = $this->setLastDataBeforeOutput(
                $i,
                $results,
                $startLat,
                $startLong,
                $breweriesData,
                $distanceLeft,
                $tripDistance,
                $beerCount,
                $usedIndexes
            );
        } else {
            return null;
        }
        return $results;
    }

    /**
     * Adds brewery and beer to $results array by given (selected) index
     *
     * @param $results - array for inserting
     * @param $index - index of brewery
     * @param $indexForResults - insertion index
     * @param $breweriesData - selected breweries
     *
     * @return array - $results array with additional value
     */
    private function getBeerAndBreweryDataByIndex($results, $index, $indexForResults, $breweriesData)
    {
        $brewery = $breweriesData[$index]['brewery'];
        if ($brewery === null) {
            return $results;
        }
        if (property_exists($brewery, 'beers')) {
            $beerFound = $brewery->beers;
        } else {
            $beerFound = null;
        }

        $results[$indexForResults]['brewery'] = $brewery;
        $results[$indexForResults]['beer'] = $beerFound;
        $results[$indexForResults]['latitude'] = $breweriesData[$index]['latitude'];
        $results[$indexForResults]['longitude'] = $breweriesData[$index]['longitude'];
        $results[$indexForResults]['distance'] = $breweriesData[$index]['distance'];
        return $results;
    }

    /**
     * Sets up data of last point (home) and fills in after calculation data (distanceLeft, beerCount)
     *
     * @param $index - index of brewery
     * @param $results - array for inserting
     * @param $lat - end point latitude
     * @param $long - end point longitude
     * @param $breweriesData - data of breweries in range
     * @param $distanceLeft - distance left after going back home
     * @param $tripDistance - distance allowed
     * @param $beerCount - count of ALL beer found
     * @param $usedIndexes - array which contains indexes of visited breweries
     *
     * @return array - $results array with additional value
     */
    private function setLastDataBeforeOutput(
        $index,
        $results,
        $lat,
        $long,
        $breweriesData,
        $distanceLeft,
        $tripDistance,
        $beerCount,
        $usedIndexes
    ) {
        $results[$index]['brewery']['id'] = '0';
        $results[$index]['brewery']['name'] = 'HOME';
        $results[$index]['latitude'] = $lat;
        $results[$index]['longitude'] = $long;
        $results[$index]['distance'] = $breweriesData[end($usedIndexes)]['distanceFromHome'];
        if (!isDistance($distanceLeft)) {
            $results['distanceLeft'] = 'undefined';
        } else {
            $results['distanceLeft'] = $distanceLeft - $breweriesData[end($usedIndexes)]['distanceFromHome'];
        }
        if (!isDistance($tripDistance)) {
            $results['maxTripDistance'] = 'undefined';
        } else {
            $results['maxTripDistance'] = $tripDistance;
        }

        $results['beerCount'] = $beerCount;
        $results = $this->unsetSameBeer($results);
        return $results;
    }

    /**
     * Takes all of the beer from each brewery and looks for duplicates when inserting to array
     *
     * @param $results - array of results
     *
     * @return array
     */
    //maybe should be in helpers, but wasn't sure because it isn't abstract enough
    private function unsetSameBeer($results)
    {
        if ($results == null) {//validation block, just in case
            return null;
        }
        $allBeer = [];//will contain beer from all breweries in same place
        $i = 0;//index for allBeer array
        $j = 0;//index for results
        foreach ($results as $result) {
            if (is_array($result) && array_key_exists('beer', $result)) {
                if (!$result['beer'] == null) {
                    foreach ($result['beer'] as $beer) {
                        if (!in_array($beer['name'], $allBeer)) {//if beer is not unique
                            $allBeer[$i++] = $beer['name'];
                        }
                    }
                    unset($result['beer']);//to get rid of unnecessary data duplications
                    $results[$j++] = $result;
                }
            }
        }
        $results['uniqueBeer'] = $allBeer;//uniques left, merged to one array
        return $results;
    }
}
