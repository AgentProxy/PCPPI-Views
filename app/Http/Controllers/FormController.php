<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class FormController extends Controller
{
    function sendApplication(Request $request, $form_type){
        if($form_type=='1'){
            $this->validate($request, [
                'g-recaptcha-response' => 'required',
                'fname' => 'required|max:75',
                'lname' => 'required|max:75',
                'present' => 'required|max:150',
                'zip1' => 'max:6',
                'prov' => 'required|max:150',
                'zip2' => 'max:6',
                'bday'=> 'required|date',
                'phone'=> 'required|max:11|regex:/^0\d{10}$/',
                'email'=> 'required|email|max:75',
                'course'=>'required|max:75',
                'from1'=>'required',
                'to1'=>'required',
                'school1'=>'required|max:75',
                'gradcourse'=>'max:75',
                'school2'=>'max:75',
                'skills.*'=>'max: 75',
                'name1'=>'required|max:75',
                'num1'=>'required|max:11|regex:/^0\d{10}$/',
                'rel1'=>'required|max:75',
                'name2'=>'required|max:75',
                'num2'=>'required|max:11|regex:/^0\d{10}$/',
                'rel2'=>'required|max:75',
                'name3'=>'required|max:75',
                'num3'=>'required|max:11|regex:/^0\d{10}$/',
                'rel3'=>'required|max:75',
                'company.*' => 'max:75',
                'position.*' => 'max:75',
                'reloc'=>'required',
                'resume'=>'required|file|mimes:doc,pdf,docx|max:2048'
            ]);
        }
        else if($form_type=='2'){
            $this->validate($request, [
                'g-recaptcha-response' => 'required',
                'fname' => 'required|max:75',
                'lname' => 'required|max:75',
                'present' => 'required|max:150',
                'zip1' => 'max:6',
                'prov' => 'required|max:150',
                'zip2' => 'max:6',
                'bday'=> 'required|date',
                'phone'=> 'required|max:11|regex:/^0\d{10}$/',
                'email'=> 'required|email|max:75',
                'course'=>'required|max:75',
                'from1'=>'required',
                'to1'=>'required',
                'school1'=>'required|max:75',
                'gradcourse'=>'max:75',
                'school2'=>'max:75',
                'skills.*'=>'max: 75',
                'name1'=>'required|max:75',
                'num1'=>'required|max:11|regex:/^0\d{10}$/',
                'rel1'=>'required|max:75',
                'name2'=>'required|max:75',
                'num2'=>'required|max:11|regex:/^0\d{10}$/',
                'rel2'=>'required|max:75',
                'name3'=>'required|max:75',
                'num3'=>'required|max:11|regex:/^0\d{10}$/',
                'rel3'=>'required|max:75',
                'company.*' => 'nullable|max:75',
                'position.*' => 'nullable|max:75',
                'frdate.*' => 'nullable|date',
                'todate.*' => 'nullable|date',
                'dept' => 'required',
                'loc' => 'required',
                'reloc'=>'required',
                'resume'=>'required|file|mimes:doc,pdf,docx|max:2048'
            ]);
        }
        else if($form_type=='3'){
            $this->validate($request, [
                'g-recaptcha-response' => 'required',
                'fname' => 'required|max:75',
                'lname' => 'required|max:75',
                'present' => 'required|max:150',
                'zip1' => 'max:6',
                'prov' => 'required|max:150',
                'zip2' => 'max:6',
                'bday'=> 'required|date',
                'phone'=> 'required|max:11|regex:/^0\d{10}$/',
                'email'=> 'required|email|max:75',
                'school'=>'required|max:75',
                'course'=>'required|max:75',
                'level'=>'required',
                'sem'=>'required',
                'hrs'=>'required',
                'resume'=>'required|mimes:doc,pdf,docx|max:2048'
            ]);
        }

        $data = $request->all();
        foreach($data as $key => $data_item){
            if(is_array($data_item)){
                foreach($data_item as $key2 => $item){
                    $data[$key][$key2] = strip_tags($item);
                }
             }
            else{
                $data[$key] = strip_tags($data_item);
            }
       }
        
        $input = Input::all();
        if($form_type=='1'){
            //return redirect('careers-success');
            //return $data_cleaned;
              Mail::send('mail.professionals', compact('data'), function($message) use ($data, $input){
                $message->from($data['email']);
                $message->to('ericjoseph.flores1@gmail.com');
                $message->subject("PCPPI Applicant");
                $message->attach($input['resume']->getRealPath(),[
                        'as'=> $input['resume']->getClientOriginalName()]);
            });
            return redirect('careers-success');
        }
       
        else if ($form_type=='2'){
            //return redirect('careers-success');
            //return $data;
            //return view('mail.bank',compact('data'));
             Mail::send('mail.bank', compact('data'), function($message) use ($data, $input){
                $message->from($data['email']);
                $message->to('ericjoseph.flores1@gmail.com');
                $message->subject("PCPPI Applicant");
                $message->attach($input['resume']->getRealPath(),[
                        'as'=> $input['resume']->getClientOriginalName()]);
            });
            return redirect('careers-success');
        }
        else if ($form_type=='3'){
            
            //return $data_cleaned;
            //return view('mail.interns',compact('data'));
            Mail::send('mail.interns', compact('data'), function($message) use ($data, $input){
                $message->from($data['email']);
                $message->to('ericjoseph.flores1@gmail.com');
                $message->subject("PCPPI Applicant Intern");
                $message->attach($input['resume']->getRealPath(),[
                        'as'=> $input['resume']->getClientOriginalName()]);
            });
            return redirect('careers-success');
        }
        else{
            return false;
        }
    }
}
