<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geocode extends Model
{
    protected $table = 'geocodes';
    protected $fillable = ['breweryId', 'latitude', 'longitude'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * Seeds data to database
     *
     * @param $geocodeArray
     *
     * @return void
     */
    public static function insertWithCheck($geocodeArray)
    {
        foreach ($geocodeArray as $obj) {
            try {
                $geocode = new Geocode();
                $geocode->breweryId = $obj['breweryId'];
                $geocode->latitude = $obj['latitude'];
                $geocode->longitude = $obj['longitude'];
                $geocode->accuracy = $obj['accuracy'];
                $geocode->save();
            } catch (\Exception $e) {
                continue;
            }
        }
    }

    public function brewery()
    {
        return $this->belongsTo(Brewery::class, 'breweryId');
    }
}
