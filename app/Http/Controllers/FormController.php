<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
// use PHPMailerAutoload; 
// use PHPMailer;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class FormController extends Controller
{

    function sendApplication(Request $request, $form_type){
        // $data['fname'] = $request->fname;
        // $data['lname'] = $request->lname;

        // $data = array(
        //     'fname' => $request->fname,
        //     'lname' => $request->lname,
        //     'present'=>$request->present,
        //     'zip'=>$request->zip,
        //     'prov'=>$request->prov,
        //     'zip1'=>$request->zip1
        //     'email' => $request->email,

        // );
        $this->validate($request, [
            'g-recaptcha-response' => 'required|recaptcha',
            'fname' => 'required|max:75',
            'lname' => 'required|max:75',
            'present' => 'required|max:150',
            'prov' => 'required|max:150',
            'bday'=> 'required',
            'phone'=> 'required',
            'email'=> 'required|max:75',
            'course'=>'email|max:75',
            'from1'=>'required',
            'to1'=>'required',
            'school1'=>'required',
            'gradecourse'=>'required|max:75',
            'name1'=>'required',
            'num1'=>'required',
            'rel1'=>'required',
            'name2'=>'required',
            'num2'=>'required',
            'rel2'=>'required',
            'name3'=>'required',
            'num3'=>'required',
            'rel3'=>'required',
            'reloc',=>'required'
            'resume'=>'required'

        ]);

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
