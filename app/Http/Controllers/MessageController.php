<?php

namespace App\Http\Controllers;
use App\Mail\MessageMail;
use Illuminate\Http\Request;
use Mail;

class MessageController extends Controller
{
   public function message(){

    return view('email');
   }

   public function sendEmail(Request $request){

      $details =[
         'name' => $request->name,
         'email' => $request->email,
         'message' => $request->message,
         'zoom' => $request->zoom,
         'key' => $request->key,

      ];

      Mail::to('squadunit442@gmail.com')->send(new MessageMail($details));
      return back()->with('email_send','Email Sent Successfully!');
      
   }
}
