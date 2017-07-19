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
	    return view('proform',compact("vacancy"));
	}

	function bankform(){
		$regions = Region::all();
		return view('bankform',compact("regions"));
	}

	function internform(){
		$regions = Region::all();
		return view('internform',compact("regions"));
	}

	function mapRetrieve(){
		$regions = Region::all();
		$vacancies = Vacancy::where('closed',0)->get();
		return view('map',compact("regions","vacancies"));
	}

	function search(Request $request,$reg_id=null){
		$vacancies = Vacancy::where('closed',0)->paginate(10);
		$regions = Region::all();
		if($request!=null){
			$job = $request->job;
			$region_id = $request->region;
			$vacancies = Vacancy::where('closed',0)->where('position','like','%'.$job.'%')->paginate(10);;
		}	
		if($reg_id!=null){
			$region_id = $reg_id;
		}

		if($region_id!=0){
			$vacancies = $vacancies->where('region_id', $region_id)->paginate(10);;
		}
		Input::flash();
		return view('careersearch',compact("vacancies","regions","region_id"));
	}
}
