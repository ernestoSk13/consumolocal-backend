<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['id', 'name', 'latitude', 'longitude'];

    protected $hidden = ['latitude', 'longitude'];


    public $timestamps = false;
}
