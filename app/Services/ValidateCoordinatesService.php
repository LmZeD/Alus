<?php

namespace App\Services;

class ValidateCoordinatesService
{
    /**
     *  Checks if longitude value is valid
     *
     * @param $longitude
     *
     * @return bool
     */
    public function isLongitudeValid($longitude)
    {
        if (!is_numeric($longitude)) {
            return false;
        }
        if ($longitude < -180 || $longitude > 180) {
            return false;
        }
        return true;
    }

    /**
     *  Checks if latitude value is valid
     *
     * @param $latitude
     *
     * @return bool
     */
    public function isLatitudeValid($latitude)
    {
        if (!is_numeric($latitude)) {
            return false;
        }
        if (($latitude < -85 || $latitude > 85)) {
            return false;
        }
        return true;
    }
}
