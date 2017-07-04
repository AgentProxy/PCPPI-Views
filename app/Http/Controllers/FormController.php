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

        $data = array(
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email
        );
        // return $data['fname'];

        Mail::send('mail.professionals', $data, function($message) use ($data){

            $message->from($data['email']);
            $message->to('ericjoseph.flores1@gmail.com');
            $message->subject("PCPPI Applicant");
        });

        // return view('mail.professionals')->withData($data);
    }
}
