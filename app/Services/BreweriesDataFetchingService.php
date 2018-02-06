<?php

namespace App\Services;

use App\Beer;
use App\Brewery;
use App\Geocode;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\VarDumper\Dumper\esc;

class BreweriesDataFetchingService
{
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
        //db select of breweries with geocodes
        $breweries = Brewery::getBreweriesWithGeocodes(
            $startLong,
            $startLat,
            $longitudeDifferenceAllowed,
            $latitudeDifferenceAllowed
        );

        $breweriesData = [];//array for return data
        $distanceCalculator = new DistanceCalculationService();//distance calculation service
        //setting up data for calculations
        $cnt = 0;
        foreach ($breweries as $brewery) {
            if ($brewery->id != null) {
                $beersInBrewery = Beer::getBeersCountInBrewery($brewery->id);
                $breweryCoordinates = Geocode::getGeocodeForBrewery($brewery->id);
                $breweriesData[$cnt]['beersCount'] = $beersInBrewery;
                $breweriesData[$cnt]['breweryId'] = $brewery->id;
                $breweriesData[$cnt]['latitude'] = $breweryCoordinates['latitude'];
                $breweriesData[$cnt]['longitude'] = $breweryCoordinates['longitude'];
                $breweriesData[$cnt]['distanceFromHome'] =
                    $distanceCalculator->calculateDistanceBetweenTwoPoints(
                        $startLong,
                        $startLat,
                        $brewery->longitude,
                        $brewery->latitude
                    );
                $cnt++;
            }
        }
        return $breweriesData;
    }
}
