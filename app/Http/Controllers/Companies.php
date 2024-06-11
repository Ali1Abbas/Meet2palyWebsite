<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;
use App\Mail\DefaultEmail;

class Companies extends Controller
{

    function support (){


        return view('contact-us');
    }
    //

    function save(Request $request){
        //print_r($request->input());

        $query=DB::table('support')->insert([
        'Complain'=>$request->input('Complain'),
        'Email'=>$request->input('Email'),
        'Problem'=>$request->input('Problem'),
        



        ]);

        if($query){
            return back()->with("success","Data has been added successfuly");
        }else{

            return back()->with("fail","Somthing went wrong");
        }
    }


    function sendemail(Request $request){
        //print_r($request->input());

      $details=[
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'mobile_no'=>$request->mobile_no,
            'message'=>$request->message,
      ];

Mail::to('e4bf0768c4-ea69a3@inbox.mailtrap.io')->send(new DefaultEmail($details));
return back()->with("message_sent","Your message has been sent successfully!");

        }

}
