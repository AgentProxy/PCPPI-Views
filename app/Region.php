<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Region extends Model
{
    public function locationId(){
    	return $this->belongsTo(Location::class);
    }
}