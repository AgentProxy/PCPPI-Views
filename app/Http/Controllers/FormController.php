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
                'zip' => 'max:6',
                'prov' => 'required|max:150',
                'zip1' => 'max:6',
                'bday'=> 'required|date',
                'phone'=> 'required|max:11|regex:/^0\d{10}$/',
                'email'=> 'required|email|max:75',
                'course'=>'required|max:75',
                'from1'=>'required',
                'to1'=>'required',
                'school1'=>'required|max:75',
                'gradcourse'=>'max:75',
                'school2'=>'max:75',
                //from and to grad course

                //skills 
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
            //     //companies
                'company.*' => 'max:75',
                'position.*' => 'max:75',
                'frdate.*' => 'max:75',
                'todate.*' => 'max:75',

                'reloc'=>'required',
                'resume'=>'required|file|mimes:doc,pdf,docx|max:2048'
            //     /*
            //     //for interns 
            //     'school' => 'required|max:75',
            //     'course'=> 'required|max:75',
            //     'level' => 'required',
            //     'sem' => 'required',
            //     'hrs' => 'required',
            
            //     //for bank forms
            //     'dept' => 'required',
            //     'loc' => 'required',
            //     'reloc' => 'required',

            //     //for skills
            //     foreach($this->request->get('items') as $key => $val)
            //       {
            //         $rules['items.'.$key] = 'required|max:10';
            //       }
            //     //
            

            //     */
            ]);
        }
        else if($form_type=='2'){
            $this->validate($request, [
                'g-recaptcha-response' => 'required',
                'fname' => 'required|max:75',
                'lname' => 'required|max:75',
                'present' => 'required|max:150',
                'zip' => 'max:6',
                'prov' => 'required|max:150',
                'zip1' => 'max:6',
                'bday'=> 'required|date',
                'phone'=> 'required|max:11|regex:/^0\d{10}$/',
                'email'=> 'required|email|max:75',
                'course'=>'required|max:75',
                'from1'=>'required',
                'to1'=>'required',
                'school1'=>'required|max:75',
                'gradcourse'=>'max:75',
                'school2'=>'max:75',
                //from and to grad course

                //skills 
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
            //     //companies
                'company.*' => 'max:75',
                'position.*' => 'max:75',
                'frdate.*' => 'max:75',
                'todate.*' => 'max:75',

                'dept' => 'required',
                'loc' => 'required',
                'reloc' => 'required',

                'reloc'=>'required',
                'resume'=>'required|file|mimes:doc,pdf,docx|max:2048'
            //     /*
            //     //for interns 
            //     'school' => 'required|max:75',
            //     'course'=> 'required|max:75',
            //     'level' => 'required',
            //     'sem' => 'required',
            //     'hrs' => 'required',
            
            //     //for bank forms
            //     'dept' => 'required',
            //     'loc' => 'required',
            //     'reloc' => 'required',

            //     //for skills
            //     foreach($this->request->get('items') as $key => $val)
            //       {
            //         $rules['items.'.$key] = 'required|max:10';
            //       }
            //     //
            

            //     */
            ]);
        }
        else if($form_type=='3'){
            $this->validate($request, [
                'g-recaptcha-response' => 'required',
                'fname' => 'required|max:75',
                'lname' => 'required|max:75',
                'present' => 'required|max:150',
                'zip' => 'max:6',
                'prov' => 'required|max:150',
                'zip1' => 'max:6',
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

        $data = array();
        $data_cleaned = $request->all();
        foreach($data_cleaned as $key => $data_item){
            if(is_array($data_item)){
                foreach($data_item as $key2 => $item){
                    $data_cleaned[$key][$key2] = strip_tags($item);
                }
             }
            else{
                $data_cleaned[$key] = strip_tags($data_item);
            }
       }
        
        if($form_type=='1'){
            //return redirect('careers-success');
            return $data_cleaned;
            // return view('mail.professionals',compact('data'));
            // Mail::send('mail.professionals', $data, function($message) use ($data){
            //     $message->from($data['email']);
            //     $message->to('ericjoseph.flores1@gmail.com');
            //     $message->subject("PCPPI Applicant");
            // });
        }
       
        else if ($form_type=='2'){
            //return redirect('careers-success');
            return $data_cleaned;
            // return view('mail.bank',compact('data'));
            // Mail::send('mail.bank', $data, function($message) use ($data){
            //     $message->from($data['email']);
            //     $message->to('ericjoseph.flores1@gmail.com');
            //     $message->subject("PCPPI Applicant");
            // });
        }
        else if ($form_type=='3'){
            //return redirect('careers-success');
            return $data_cleaned;
        //    return view('mail.interns',compact('data'));
        //     Mail::send('mail.interns', $data, function($message) use ($data){
        //         $message->from($data['email']);
        //         $message->to('ericjoseph.flores1@gmail.com');
        //         $message->subject("PCPPI Applicant");
        }
        else{
            return false;
        }
    }
}
