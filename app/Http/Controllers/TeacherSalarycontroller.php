<?php

namespace App\Http\Controllers;

use App\Models\teachersalary;
use Illuminate\Http\Request;

class TeacherSalarycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salary = teachersalary::get();       
       return view('manage_teacher_salary')->with(compact('salary')) ;//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_teacher_salary') ;//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'teachid' =>'required',
            'teachname' =>'required',
            'nic' =>'required',
            'subject' =>'required',
            'salarymonth' =>'required',
            'subscribe' =>'required',
            'amount' =>'required',

        ]);

        teachersalary::create($request->all());

      return redirect()->route("salary.index")->with('message','Teacher Salary Record Added Successfully  ');
       
    }
    

  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\teachersalary  $teachersalary
     * @return \Illuminate\Http\Response
     */
    public function editsalary($id)
    {
            $data = teachersalary::find($id);
            return view('edit_teacher_details',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\teachersalary  $teachersalary
     * @return \Illuminate\Http\Response
     */
    public function updatesalary(Request $request)
    {
        $teachid = $request->teachid;
        $teachname = $request->teachname;
        $nic = $request->nic;
        $subject = $request->subject;
        $salarymonth = $request->salarymonth;
        $subscribe = $request->subscribe;
        $amount = $request->amount;

        $data = teachersalary::find($request->id);

        $data->teachid = $teachid;
        $data->teachname = $teachname;
        $data->nic = $nic;
        $data->subject = $subject;
        $data->salarymonth = $salarymonth;
        $data->subscribe = $subscribe;
        $data->amount = $amount;


        $data->save();

        return redirect()->route("salary.index")->with('message','Teacher Salary Record Updated Successfully  ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\teachersalary  $teachersalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(teachersalary $salary)
    {
        $salary ->delete();

         return redirect()->route("salary.index")->with('message','Teacher Salary Record Successfuly deleted   ');
    }

    //search teacher salary details
    public function searchteacher(Request $request)
   {
        $searchteacher = $request->get('searchteacher');
        $salary = teachersalary::where('teachid','like','%'.$searchteacher.'%')
        ->orwhere('teachname','like', '%'.$searchteacher.'%')
        ->orwhere('nic','like', '%'.$searchteacher.'%')
        ->orwhere('subject','like', '%'.$searchteacher.'%')
        ->orwhere('salarymonth','like', '%'.$searchteacher.'%')
        ->paginate(5);

        return view('manage_teacher_salary',['salary'=> $salary]);

   }



   
}
