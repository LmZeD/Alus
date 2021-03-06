<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    protected $table = 'breweries';
    protected $fillable = ['id'];
    public $timestamps = false;
    protected $primaryKey = 'id';

    public static function getBreweriesWithCoordinatesCount()
    {
        $breweriesWithCoordinatesCount = Brewery::join('geocodes', 'breweries.id', '=', 'geocodes.breweryId')
            ->count();
        return $breweriesWithCoordinatesCount;
    }

    public static function getBreweriesWithGeocodes(
        $startLong,
        $startLat,
        $longitudeDifferenceAllowed,
        $latitudeDifferenceAllowed
    ) {
        $breweries = Geocode::join('breweries', 'breweries.id', '=', 'geocodes.breweryId')->whereBetween(
            'longitude',
            [$startLong - $longitudeDifferenceAllowed - 0.1, $startLong + $longitudeDifferenceAllowed + 0.1]
        )->whereBetween('latitude', [($startLat - $latitudeDifferenceAllowed * 2 - 0.1),
            ($startLat + $latitudeDifferenceAllowed) * 2 + 0.1])->get();

        return $breweries;
    }

    public function getBeersInBreweryCount()
    {
        //doing this inside method slows it down quite a bit, so defining method here makes a difference
        return $this->beers()->count();
    }

    public function beers()
    {
        return $this->hasMany(Beer::class, 'breweryId');
    }

    public function geocode()
    {
        return $this->hasOne(Geocode::class, 'breweryId');
    }
}
