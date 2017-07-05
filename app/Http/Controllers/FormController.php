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
        // $this->validate($request, [
        //     'g-recaptcha-response' => 'required|recaptcha',
        //     'fname' => 'required|max:75',
        //     'lname' => 'required|max:75',
        //     'present' => 'required|max:150',
        //     'zip' => 'max:6',
        //     'prov' => 'required|max:150',
        //     'zip1' => 'max:6',
        //     'bday'=> 'required|date',
        //     'phone'=> 'required|max:11',
        //     'email'=> 'required|email|max:75',
        //     'course'=>'required|max:75',
        //     'from1'=>'required',
        //     'to1'=>'required',
        //     'school1'=>'required|max:75',
        //     'gradcourse'=>'max:75',
        //     'school2'=>'max:75',
        //     //from and to grad course
        //     //skills 
        //     'name1'=>'required|max:75',
        //     'num1'=>'required|max:11',
        //     'rel1'=>'required|max:75',
        //     'name2'=>'required|max:75',
        //     'num2'=>'required|max:11',
        //     'rel2'=>'required|max:75',
        //     'name3'=>'required|max:75',
        //     'num3'=>'required|max:11',
        //     'rel3'=>'required|max:75',
        //     //companies
        //     'reloc',=>'required',
        //     'resume'=>'required|file|mimes:doc,pdf,docx|max:2097152'
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
        // ]);

        $data = array();
        $data_uncleaned = $request->all();
        foreach($data_uncleaned as $data_item){
            $data_clean = strip_tags($data_item);
            array_push($data, $data_clean);
        }

        if($form_type=='1'){
            return redirect('careers-success');
            // return $data;
            // return view('mail.professionals',compact('data'));
            // Mail::send('mail.professionals', $data, function($message) use ($data){
            //     $message->from($data['email']);
            //     $message->to('ericjoseph.flores1@gmail.com');
            //     $message->subject("PCPPI Applicant");
            // });
        }
        else if ($form_type=='2'){
            return redirect('careers-success');
            // return $data;
            // return view('mail.bank',compact('data'));
            // Mail::send('mail.bank', $data, function($message) use ($data){
            //     $message->from($data['email']);
            //     $message->to('ericjoseph.flores1@gmail.com');
            //     $message->subject("PCPPI Applicant");
            // });
        }
        else{
            return redirect('careers-success');
        //    return $data;
        //    return view('mail.interns',compact('data'));
        //     Mail::send('mail.interns', $data, function($message) use ($data){
        //         $message->from($data['email']);
        //         $message->to('ericjoseph.flores1@gmail.com');
        //         $message->subject("PCPPI Applicant");
        }
    }
}
