<?php

namespace App\Http;

function getCurrentTime()
{
    $time = microtime();
    $time = explode(' ', $time);
    $time = $time[1] + $time[0];
    return $time;
}

function getTotalRunTime($startTime)
{
    $finish = getCurrentTime();
    $totalTime = round(($finish - $startTime), 4);
    return $totalTime;
}

//divided by 100 - (+-110 km per whole number of coordinate, so making 100 will be very generous)
//+1 for rounding mistakes
function differenceAllowed($tripDistance)
{
    return $tripDistance / 100 + 1;
}

function validateLongitude($longitude)
{
    if ($longitude > -180 && $longitude < 180) {
        return false;
    }
    return true;
}

function validateLatitude($latitude)
{
    if ($latitude > -85 && $latitude < 85) {
        return false;
    }
    return true;
}