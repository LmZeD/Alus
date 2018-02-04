<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geocode extends Model
{
    protected $table = 'geocodes';
    protected $fillable = ['brewery_id', 'latitude', 'longitude'];

    public static function getGeocodeForBrewery($breweryId)
    {
        return Geocode::where('brewery_id', $breweryId)->select('latitude', 'longitude')->first();
    }
}
