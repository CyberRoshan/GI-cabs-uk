<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirportTransfer extends Model
{
    use HasFactory;

    function get_aria(){
        return $this->hasMany('App\Models\AriaToAirport', 'airport');
    }
}
