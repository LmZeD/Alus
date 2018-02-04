<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brewery extends Model
{
    protected $table = 'breweries';
    protected $fillable = ['id'];

    public function getBreweriesWithCoordinatesCount()
    {
        $breweriesWithCoordinatesCount = DB::table('geocodes')->
        join('breweries', 'breweries.id', '=', 'geocodes.brewery_id')->count();
        return $breweriesWithCoordinatesCount;
    }

    public function getBreweriesWithGeocodes(
        $startLong,
        $startLat,
        $longitudeDifferenceAllowed,
        $latitudeDifferenceAllowed
    ) {
        $breweries = DB::table('geocodes')->leftjoin(
            'breweries',
            function ($join) use (
                $startLong,
                $startLat,
                $longitudeDifferenceAllowed,
                $latitudeDifferenceAllowed
            ) {
                $join->on('breweries.id', '=', 'geocodes.brewery_id');
            }
        )->whereBetween(
            'longitude',
            [$startLong - $longitudeDifferenceAllowed - 0.1, $startLong + $longitudeDifferenceAllowed + 0.1]
        )->whereBetween('latitude', [($startLat - $latitudeDifferenceAllowed * 2 - 0.1),
            ($startLat + $latitudeDifferenceAllowed) * 2 + 0.1])->get();
        return $breweries;
    }

    public function getBreweryNameById($breweryId)
    {
        return Brewery::where('id', $breweryId)->select('id', 'name')->first();
    }
}
