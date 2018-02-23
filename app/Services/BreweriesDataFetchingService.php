<?php

namespace App\Services;

use App\Beer;
use App\Brewery;
use App\Geocode;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\VarDumper\Dumper\esc;

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
        //db select of breweries with geocodes
        $breweries = Brewery::getBreweriesWithGeocodes(
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
                $brewery = $geocode->brewery;
                $beersInBrewery = $brewery->getBeersInBreweryCount();
                $breweriesData[$cnt]['beersCount'] = $beersInBrewery;
                $breweriesData[$cnt]['brewery'] = $brewery;
                $breweriesData[$cnt]['latitude'] = $geocode['latitude'];
                $breweriesData[$cnt]['longitude'] = $geocode['longitude'];
                $breweriesData[$cnt]['distanceFromHome'] =
                    $this->distanceCalculationService->calculateDistanceBetweenTwoPoints(
                        $startLong,
                        $startLat,
                        $geocode->longitude,
                        $geocode->latitude
                    );
                $cnt++;
            }
        }
        return $breweriesData;
    }
}
