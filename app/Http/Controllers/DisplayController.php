<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;
use App\Region;
use DB;

class DisplayController extends Controller
{
    //

    function vacancy($id){
	    $vacancy = Vacancy::where('id',$id)->first();
	    return view('proform',compact("vacancy"));
	}

	function mapRetrieve(){
		$regions = Region::all();
		return view('map',compact("regions"));
	}

	function search(Request $request){
		//return $request->job;
		$job = $request->job;
		$region = $request->region;
		$regions = Region::all();
		if($region!=0){
			$vacancies = Vacancy::where('region_id', $region)->get();
		}
		else{
			$vacancies = Vacancy::all();	
		}

		if($job!=""){
			//$vacancies = $vacancies->where('position', 'like', '%' . $job . '%');
			return $vacancies->where('position','LIKE','%'.$job.'%')->all();
		}

		return view('careersearch',compact("vacancies","regions"));
	}
}