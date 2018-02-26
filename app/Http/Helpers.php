<?php

namespace App\Http;

use App\Brewery;

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

function isDistance($argument)
{
    if (is_numeric($argument)) {
        if (doubleval($argument) >= 0) {
            return true;
        }
    }
    return false;
}


function dataFactory($count, $offset)//used for testing
{
    $breweriesData = [];
    for ($i = 0; $i < $count; $i++) {
        $breweriesData[$i + $offset]['beersCount'] = $i * 2;
        $breweriesData[$i + $offset]['brewery'] = factory(Brewery::class, 1)->make();
        $breweriesData[$i + $offset]['latitude'] = $i * 0.321 + 1;
        $breweriesData[$i + $offset]['longitude'] = $i * 0.123 + 1;
        $breweriesData[$i + $offset]['distance'] = 5 * $i - 2.2;
        $breweriesData[$i + $offset]['distanceFromHome'] = 5 * $i;
    }
    return $breweriesData;
}
