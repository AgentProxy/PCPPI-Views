<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Vacancy extends Model
{
	protected $table = 'vacancies';
	
    public function regionId(){
    	return $this->belongsTo(Region::class);
    }
}
