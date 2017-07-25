<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\User;
use App\Vacancy;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class FormController extends Controller
{
    /*
        Validate form based on type (1 for Professionals, 2 for Talent Bank, 3 for Interns)
    */
    function sendApplication(Request $request, $form_type, $job_id=null){
        if($form_type=='1'){
            $this->validate($request, [
                'g-recaptcha-response' => 'required',
                'fname' => 'required|max:75',
                'lname' => 'required|max:75',
                'present' => 'required|max:150',
                'prov' => 'required|max:150',
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
                'company.*' => 'max:75',
                'position.*' => 'max:75',
                'reloc'=>'required',
                'resume'=>'required|file|mimes:doc,pdf,docx|max:2048',
                'agree'=>'required'

            ]);
        }
        else if($form_type=='2'){
            $this->validate($request, [
                'g-recaptcha-response' => 'required',
                'fname' => 'required|max:75',
                'lname' => 'required|max:75',
                'present' => 'required|max:150',
                'prov' => 'required|max:150',
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
                'company.*' => 'nullable|max:75',
                'position.*' => 'nullable|max:75',
                'frdate.*' => 'nullable|date',
                'todate.*' => 'nullable|date',
                'funct' => 'required',
                'loc' => 'required',
                'reloc'=>'required',
                'resume'=>'required|file|mimes:doc,pdf,docx|max:2048',
                'agree'=>'required'
            ]);
        }
        else if($form_type=='3'){
            $this->validate($request, [
                'g-recaptcha-response' => 'required',
                'fname' => 'required|max:75',
                'lname' => 'required|max:75',
                'present' => 'required|max:150',
                'prov' => 'required|max:150',
                'bday'=> 'required|date',
                'phone'=> 'required|max:11|regex:/^0\d{10}$/',
                'email'=> 'required|email|max:75',
                'school'=>'required|max:75',
                'course'=>'required|max:75',
                'loc' => 'required',
                'level'=>'required',
                'sem'=>'required',
                'hrs'=>'required',
                'resume'=>'required|mimes:doc,pdf,docx|max:2048',
                'agree'=>'required'
            ]);
        }

        /*
            This block of code cleans out the data from the applicants.
            It strips away script tags that could be executed.
            Helps to prevent XSS Attacks.
        */
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

        /*
            For Form Type 1:
            Checks if vacancy is still available, if not then return error page.
            Send form to careers@pcppi.com.ph then
            add one count to vacancy's applicant counter.
        */
        if($form_type=='1'){
            if($job_id!=null){
                $vacancies = Vacancy::where('id',$job_id)->where('closed',0)->first();
                if($vacancies==null){
                    abort(404, 'The vacancy you are looking is not available');
                    return false;
                } 
            }
                Mail::send('mail.professionals', compact('data'), function($message) use ($data, $input){
                    $message->from($data['email']);
                    $message->replyTo($data['email']);
                    //$message->to('careers@pcppi.com.ph');
                    $message->to('careers@pcppi.com.ph');
                    $message->subject("PCPPI Professional Applicant (".$data['lname'].")");
                    $message->attach($input['resume']->getRealPath(),[
                            'as'=> $input['resume']->getClientOriginalName()]);
                });
            if (Mail::failures()) {
                // return response showing failed emails
                abort(404, 'The email failed to send');
            }
            DB::table('vacancies')->where('id',$job_id)->increment('applicants');
            return redirect('careers-success');
        }
       
        else if ($form_type=='2'){
             Mail::send('mail.bank', compact('data'), function($message) use ($data, $input){
                $message->from($data['email']);
                $message->replyTo($data['email']);
                //$message->to('careers@pcppi.com.ph');
                $message->to('careers@pcppi.com.ph');
                $message->subject("PCPPI Talent Bank Applicant (".$data['lname'].")");
                $message->attach($input['resume']->getRealPath(),[
                        'as'=> $input['resume']->getClientOriginalName()]);
            });
             if (Mail::failures()) {
                // return response showing failed emails
                abort(404, 'The email failed to send');
            }
            return redirect('careers-success');
        }

        else if ($form_type=='3'){
            Mail::send('mail.interns', compact('data'), function($message) use ($data, $input){
                $message->from($data['email']);
                $message->replyTo($data['email']);
                //$message->to('careers@pcppi.com.ph');
                $message->to('careers@pcppi.com.ph');
                $message->subject("PCPPI Applicant Intern (".$data['lname'].")");
                $message->attach($input['resume']->getRealPath(),[
                        'as'=> $input['resume']->getClientOriginalName()]);
            });
            if (Mail::failures()) {
                // return response showing failed emails
                abort(404, 'The email failed to send');
            }
            return redirect('careers-success');
        }
        else{
            abort(404, 'The vacancy you are looking is not available');
            return false;
        }
    }
}
