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
    //
    function validateForm(Request $request, $form_type){
    		// if($request->hasFile('resume')){
      //       $filename = $request->resume->getClientOriginalName();
      //       //$filename =  $username.$post->id.$filename;
      //       $filesize= $request->audio->getClientSize();
      //       $extension = File::extension($filename);
      //       // $request->audio->move('user-audios',$filename);
      //       //  DB::table('posts')->where('id',$post->id)
      //       // ->update(['filename' => $filename]);

      //   }   
    sendApplication($request);

    // return view('mail.professionals')->withData($data);
    // echo "$form_type";  
    }

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
        $data = $request->all();

        if($form_type=='1'){
            return $data;
            return view('mail.professionals',compact('data'));
            // Mail::send('mail.professionals', $data, function($message) use ($data){
            //     $message->from($data['email']);
            //     $message->to('ericjoseph.flores1@gmail.com');
            //     $message->subject("PCPPI Applicant");
            // });
        }
        else if ($form_type=='2'){
            return $data;
            return view('mail.bank',compact('data'));
            // Mail::send('mail.bank', $data, function($message) use ($data){
            //     $message->from($data['email']);
            //     $message->to('ericjoseph.flores1@gmail.com');
            //     $message->subject("PCPPI Applicant");
            // });
        }
        else{
            return $data;
            return view('mail.interns',compact('data'));
        //     Mail::send('mail.interns', $data, function($message) use ($data){
        //         $message->from($data['email']);
        //         $message->to('ericjoseph.flores1@gmail.com');
        //         $message->subject("PCPPI Applicant");
        }
    }
}
