<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checkpay;

class checkpayclontroller extends Controller
{
    public function check(Request $request){
        //return $request->input();
        /*
        $email = $request->email;
        $enroll = $request->enroll;
        */
        $link = $request->link;



        $request->validate([
            'email'=>'required|email',
            'enroll'=>'required|min:4|max:5'
        ]);
        $payinfo=checkpay::where('email','=',$request->email)->first();
        $enrollinfo=checkpay::where('enrollkey','=',$request->enroll)->first();
        if(!$payinfo){
            return back()->with('fail','we do not recognize your email address');
        }else{
            if(!$enrollinfo){
                return back()->with('fail','Incorect Password');
                //return redirect('checkpay');
                
            }else{
                
                return redirect($link);
                //return back()->with('fail','Incoreect Password');

            }

        }

    }
}
