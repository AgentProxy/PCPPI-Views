<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vacancy;

class Region extends Model
{
    public function locationId(){
    	return $this->belongsTo(Location::class);
    }

    public function vacancies(){
    	return $this->hasMany('App\Vacancy');
    }
}
