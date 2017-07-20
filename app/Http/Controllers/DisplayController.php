<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Vacancy;
use App\Department;
use App\Region;
use DB;


class DisplayController extends Controller
{

    function vacancy($id){
	    $vacancy = Vacancy::where('id',$id)->where('closed',0)->first();
	    if($vacancy == null){
	    	abort(404, 'The vacancy you are looking is not available');
	    }
	    return view('proform',compact("vacancy"));
	}

	function bankform(){
		$regions = Region::all();
		$functions = Department::all();
		return view('bankform',compact("regions","functions"));
	}

	function internform(){
		$regions = Region::all();
		return view('internform',compact("regions"));
	}

	function mapRetrieve(){
		$regions = Region::all();
		$functions = Department::all();
		$vacancies = Vacancy::where('closed',0)->get();
		return view('map',compact("regions","vacancies","functions"));
	}

	function search(Request $request,$reg_id=null){
		$vacancies = Vacancy::where('closed',0);
		$functions = Department::all();
		$regions = Region::all();
		$job="";

		/*
			if applicant specifies either region or job 
		*/
		if($request!=null){
			$job = $request->job;
			$region_id = $request->region;
			$function_id = $request->function;
		}

		if($reg_id!=null){	
			/*
				If searched through google maps vacancies link
			*/
			$region_id = $reg_id;
		}

		if($region_id!=0){
			$vacancies = $vacancies->where('position','like','%'.$job.'%')->where('region_id',$region_id);
		}
		
		else{
			/*
			retrieve all vacancies in all regions if region is not specified
			*/
			$vacancies = $vacancies->where('position','like','%'.$job.'%');
		}

		if($function_id!=0){
			$vacancies = $vacancies->where('department_id',$function_id)->paginate(10);
		}
		else{
			$vacancies = $vacancies->paginate(10);
		}

		Input::flash();
		return view('careersearch',compact("vacancies","regions","region_id","functions","function_id"));
	}
}
