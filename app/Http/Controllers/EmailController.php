<?php

namespace App\Http\Controllers;

use App\Decorator\BaseNotifier;
use App\Decorator\Mailtrap;
use App\Decorator\Notify;
use App\Mail\Mail as MailMail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;


// use Illuminate\Support\Facades\Mail;
// use App\Mail\Mail;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    { 

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'phone' => ['required','max:9'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
         }

         $baseNotifier = new BaseNotifier();

         $Notifier = new Mailtrap($baseNotifier);
         
        $message =  $Notifier->send($request->message);
    


        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'message' => $message 
        ];

            Mail::to('z61149036@gmail.com')->send(new MailMail($data));
            return back()->with(['message' => 'Email successfully sent!']);

        
    }
}