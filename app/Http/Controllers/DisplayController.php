<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Vacancy;
use App\Region;
use DB;


class DisplayController extends Controller
{
    //

    function vacancy($id){
	    $vacancy = Vacancy::where('id',$id)->first();
	    if($vacancy == null){
	    	abort(404, 'The vacancy you are looking is not available');
	    }
	    $region = Region::where('id',$vacancy->region_id)->first();
	   
	    return view('proform',compact("vacancy"));
	}

	function bankform(){
		$regions = Region::all();
		return view('bankform',compact("regions"));
	}

	function mapRetrieve(){
		$regions = Region::all();
		$vacancies = Vacancy::where('closed',0)->get();
		//return ($regions);
		return view('map',compact("regions","vacancies"));
	}

	function search(Request $request,$reg_id=null){
		//return $request->job;
		$vacancies = Vacancy::where('closed',0)->get();
		$regions = Region::all();
		if($request!=null){
			$job = $request->job;
			$region_id = $request->region;
			$vacancies = Vacancy::where('closed',0)->where('position','like','%'.$job.'%')->get();
		}	
		if($reg_id!=null){
			$region_id = $reg_id;
		}

		if($region_id!=0){
			$vacancies = $vacancies->where('region_id', $region_id)->all();
		}
		Input::flash();
		return view('careersearch',compact("vacancies","regions","region_id"));
	}
}
