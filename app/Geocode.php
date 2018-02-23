<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geocode extends Model
{
    protected $table = 'geocodes';
    protected $fillable = ['breweryId', 'latitude', 'longitude'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function brewery()
    {
        return $this->belongsTo('App\Brewery', 'breweryId');
    }
}
