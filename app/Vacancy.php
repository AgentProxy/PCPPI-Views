<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Region;

class Vacancy extends Model
{
	protected $table = 'vacancies';

    public function regionId(){
    	return $this->belongsTo(Region::class);
    }

    public function departmentId(){
    	return $this->belongsTo(Department::class);
    }

    public function regions(){
    	return $this->belongsTo('App\Region','region_id');
    }

    public function functions(){
        return $this->belongsTo('App\Department','department_id');
    }
}
