<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Geocode extends Model
{
    protected $table = 'geocodes';
    protected $fillable=[
        'brewery_id','latitude','longitude'
    ];
}
