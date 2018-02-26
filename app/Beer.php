<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $table = 'beers';
    protected $fillable = [
        'breweryId', 'name',
    ];
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function brewery()
    {
        return $this->belongsTo(Brewery::class, 'breweryId');
    }
}
