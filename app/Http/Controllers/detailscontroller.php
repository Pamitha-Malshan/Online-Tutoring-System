<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\details;
use Illuminate\Http\Request;


class detailscontroller extends Controller
{
    // Dispaly payment success message
    public function success()
    {
     return view('payment_success');


    }

    //add payment details
    public function addPaymentinfo()
    {

        return view('student_details');
    }
     
    //create student payment details
    public function create()
    {
        return view('student_details') ;
    }

    //store  student payment details
    public function storepaymentinfo(Request $request)
    {


        $stuid = $request->stuid;
        $stuname = $request->stuname;
        $grade = $request->grade;
        $subid = $request->subid;
        $month = $request->month;
        $totfee = $request->totfee;
        $bank = $request->bank;
        $branch = $request->branch;
        $date = $request->date;        
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move('images/',$imageName);
        $status = $request->status;


        $details = new details();
        $details ->stuid = $stuid;
        $details ->stuname = $stuname;
        $details ->grade = $grade;
        $details ->subid = $subid;
        $details ->month = $month;
        $details ->totfee = $totfee;
        $details ->bank = $bank;
        $details ->branch = $branch;
        $details ->date = $date;      
        $details ->slipimage = $imageName;
        $details ->status = $status;    
        $details->save();

        
       //redirect Payment success page
        return redirect()->away('paymentsuccess')->with('message1','Your Payment is Successfull ');
     
       

    }

     //return database values in  to tthe summary tabale
    public function payment()

    {
        $data = details::all();
        return view('details_summary',compact('data'));
    }

    //edit payment details
    public function editpaymentinfo($id)

    {

    //find payment details in database
        $payment = details::find($id);
        return view('edit_student_details',compact('payment')); 
    }

    //update payment details table
    public function updatepaymentinfo(Request $request)


    {

        $stuid = $request->stuid;
        $stuname = $request->stuname;
        $grade = $request->grade;
        $subid = $request->subid;
        $month = $request->month;
        $totfee = $request->totfee;
        $bank = $request->bank;
        $branch = $request->branch;
        $date = $request->date;
        $status = $request->status;
        

        $payment = details::find($request->id);
        $payment->stuid = $stuid;
        $payment->stuname = $stuname;
        $payment->grade = $grade;
        $payment->subid = $subid;
        $payment->month = $month;
        $payment->totfee = $totfee;
        $payment->bank = $bank;
        $payment->branch = $branch;
        $payment->date = $date;
        $payment->status = $status;
         $payment->save();

        return redirect()->away('paymentsummary')->with('message2','Payment Status Successfuly Updated ');



    }

   //search student payemant details
   public function search(Request $request)
   {
        $search = $request->get('search');
        $data = details::where('stuid','like','%'.$search.'%')
        ->orwhere('month','like', '%'.$search.'%')
        ->orwhere('grade','like', '%'.$search.'%')
        ->orwhere('date','like', '%'.$search.'%')
        ->orwhere('status','like', '%'.$search.'%')->paginate(5);

        return view('details_summary',['data'=> $data]);

   }

   
}
