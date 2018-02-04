<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $table = 'beers';
    protected $fillable = [
        'brewery_id', 'name',
    ];

    /**
     * Gets beer count in brewery
     *
     * @param $breweryId - index of brewery
     *
     * @return integer - count of beer
     */
    public static function getBeersCountInBrewery($breweryId)
    {
        return Beer::where('brewery_id', $breweryId)->count();
    }

    /**
     * Gets all beer of named brewery
     *
     * @param $breweryId - index of brewery
     *
     * @return Beer[] - array of beer
     */
    public static function getBeerInBrewery($breweryId)
    {
        return Beer::where('brewery_id', $breweryId)->get();
    }
}
