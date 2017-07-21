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
    	/*
			This method directs to the professional form where the applicant can enter the fields given.
			The vacancy object will be included during redirection and will be used in the professional form for display
			and for added information in the professional forms.
    	*/

	    $vacancy = Vacancy::where('id',$id)->where('closed',0)->first();
	    if($vacancy == null){
	    	abort(404, 'The vacancy you are looking is not available');
	    }
	    return view('proform',compact("vacancy"));
	}

	function bankform(){
		/*
			This method directs to the talent bank form where the applicant can enter the fields given.
			The regions and functions objects will be included during redirection and will be used in the professional form for display
			and for added information in the professional forms.
    	*/
		$regions = Region::all();
		$functions = Department::all();
		return view('bankform',compact("regions","functions"));
	}

	function internform(){
		/*
			This method directs to the internship form where the applicant can enter the fields given.
			The regions object will be included during redirection and will be used in the internship form for display(data for dropdown in 
			preferred region)
    	*/
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
		/*
			Retrieve the region id($reg_id) if page is visited through clicking a region in Google Maps interface.
			If search bar is used, the $request object will be used. This object contains the input fields' values from the 
			search bar 
		*/

		$vacancies = Vacancy::where('closed',0);
		$functions = Department::all();
		$regions = Region::all();
		$job="";


		//if applicant specifies either region or job 
		if($request!=null){
			$job = $request->job;
			$region_id = $request->region;
			$function_id = $request->function;
		}

		//If searched through google maps vacancies link
		if($reg_id!=null){	
			$region_id = $reg_id;
		}

		if($region_id!=0){
			$vacancies = $vacancies->where('position','like','%'.$job.'%')->where('region_id',$region_id);
		}
		
		//retrieve all vacancies in all regions if region is not specified
		else{
			$vacancies = $vacancies->where('position','like','%'.$job.'%');
		}

		//if function is specified
		if($function_id!=0){
			$vacancies = $vacancies->where('department_id',$function_id)->paginate(10);
		}
		else{
			$vacancies = $vacancies->paginate(10);
		}

		Input::flash();	//remember search inputs 
		return view('careersearch',compact("vacancies","regions","region_id","functions","function_id"));
	}
}
