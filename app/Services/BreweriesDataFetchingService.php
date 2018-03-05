<?php

namespace App\Services;

use App\Brewery;

class BreweriesDataFetchingService
{
    private $distanceCalculationService;

    public function __construct(DistanceCalculationService $distanceCalculationService)
    {
        $this->distanceCalculationService = $distanceCalculationService;
    }

    /**
     *  Collects data of breweries
     *
     * @param $startLong - start point longitude
     * @param $startLat - start point latitude
     * @param $longitudeDifferenceAllowed - determines available range to select longitude
     * @param $latitudeDifferenceAllowed - determines available range to select latitude
     *
     * @return array - of in range breweries
     */
    public function setUpBreweriesData($startLong, $startLat, $longitudeDifferenceAllowed, $latitudeDifferenceAllowed)
    {
        $breweries = $this->getBreweriesWithGeocodes(
            $startLong,
            $startLat,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        $breweriesData = [];//array for return data
        //setting up data for calculations
        $cnt = 0;
        foreach ($breweries as $geocode) {
            if ($geocode->id != null) {
                $breweriesData[$cnt] = $this->setBreweriesDataObj($geocode, $startLong, $startLat);
                $cnt++;
            }
        }
        return $breweriesData;
    }

    /**
     *  Collects data of brewery
     *
     * @param $geocode - geocode object
     * @param $startLong - start point longitude
     * @param $startLat - start point latitude
     *
     * @return array
     */
    private function setBreweriesDataObj($geocode, $startLong, $startLat)
    {
        $brewery = $geocode->brewery;
        $beersInBrewery = $brewery->getBeersInBreweryCount();
        $breweriesDataObj['beersCount'] = $beersInBrewery;
        $breweriesDataObj['brewery'] = $brewery;
        $breweriesDataObj['latitude'] = $geocode['latitude'];
        $breweriesDataObj['longitude'] = $geocode['longitude'];
        $breweriesDataObj['distanceFromHome'] =
            $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
                $startLong,
                $startLat,
                $geocode->longitude,
                $geocode->latitude
            );
        return $breweriesDataObj;
    }

    /**
     *  Gets breweries with geocodes
     *
     * @param $startLong - start point longitude
     * @param $startLat - start point latitude
     * @param $longitudeDifferenceAllowed - determines available range to select longitude
     * @param $latitudeDifferenceAllowed - determines available range to select latitude
     *
     * @return array
     */

    private function getBreweriesWithGeocodes(
        $startLong,
        $startLat,
        $longitudeDifferenceAllowed,
        $latitudeDifferenceAllowed
    ) {
        $breweries = Brewery::getBreweriesWithGeocodes(
            $startLong,
            $startLat,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );
        return $breweries;
    }
}
