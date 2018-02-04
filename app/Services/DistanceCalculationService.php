<?php

namespace App\Services;

class DistanceCalculationService
{
    /**
     *  Returns distance between two points using harversine formula
     *
     * @param $long1
     * @param $lat1
     * @param $long2
     * @param $lat2
     *
     * @return double
     */
    //might be placed in helpers, but I'm not sure
    public function calculateDistanceBetweenTwoPoints($long1, $lat1, $long2, $lat2)
    {
        $R = 6373;//radius of Earth in km

        $long1 = deg2rad($long1);
        $long2 = deg2rad($long2);
        $lat1 = deg2rad($lat1);
        $lat2 = deg2rad($lat2);

        $deltaLong = $long2 - $long1;
        $deltaLat = $lat2 - $lat1;

        $a = pow(sin($deltaLat / 2), 2) + cos($lat1) * cos($lat2) * pow(sin($deltaLong / 2), 2);

        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        $km = $R * $c;
        $km = round($km, 3);

        return $km;
    }
}
