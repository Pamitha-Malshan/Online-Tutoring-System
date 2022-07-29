<?php

namespace App\Http\Controllers;
use App\Models\subject;
use PDF;
use Illuminate\Http\Request;
use App\resources\views\pamitha\subjectinsert;
use App\resources\views\OL;
use App\resources\views\AL;
use App\resources\views\search;
use App\resources\views\Dman;
use App\resources\views\Delivery;

class insertsubject extends Controller
{
    public function store(Request $request){
        
       $subject= new subject;

       $subject->code = $request->code;
       $subject->subject = $request->subject;
       $subject->grade = $request->grade;
       $subject->quentity= $request->qut;
       
      $subject->save();

      $data=subject::all();
      return redirect()->back(); 
      return view('pamitha/subjectinsert')->with('subjects',$data);

    }
    public function update($id){
      $task=subject::find($id);
      return view('pamitha/updatesubject')->with('taskdata',$task);
    }
    public function updateAL($id){
      $task=subject::find($id);
      return view('pamitha/updateAL')->with('taskdata',$task);
    }
    public function updateOL($id){
      $task=subject::find($id);
      return view('pamitha/updateOL')->with('taskdata',$task);
    }
    public function updatesubject($id){
      $task=subject::find($id);
      return view('pamitha/updatesubject')->with('taskdata',$task);
    }

    public function updatedata(Request $request){
       //  dd($request);
       $id=$request->id;
       $code=$request->code;
       $subject=$request->subject;
       $grade=$request->grade;
       $quentity=$request->quentity;

       $data=subject::find($id);
       $data->code=$code;
       $data->subject=$subject;
       $data->grade=$grade;
       $data->quentity=$quentity;
       $data->save();
       $tasks=subject::all();
      // return redirect()->back();
       return view('pamitha/subjectinsert')->with('subjects',$tasks);
  
    }
    public function updatedataA(Request $request){
      //  dd($request);
      $id=$request->id;
      $code=$request->code;
      $subject=$request->subject;
      $grade=$request->grade;
      $quentity=$request->quentity;

      $data=subject::find($id);
      $data->code=$code;
      $data->subject=$subject;
      $data->grade=$grade;
      $data->quentity=$quentity;
      $data->save();
      $tasks=subject::all();
     // return redirect()->back();
      return view('pamitha/AL')->with('subjects',$tasks);
 
   }
   public function updatedataO(Request $request){
    //  dd($request);
    $id=$request->id;
    $code=$request->code;
    $subject=$request->subject;
    $grade=$request->grade;
    $quentity=$request->quentity;

    $data=subject::find($id);
    $data->code=$code;
    $data->subject=$subject;
    $data->grade=$grade;
    $data->quentity=$quentity;
    $data->save();
    $tasks=subject::all();
   // return redirect()->back();
    return view('pamitha/OL')->with('subjects',$tasks);

 }

    public function delete($id){
          $task=subject::find($id);
          $task->delete();
         return redirect()->back();
    }

    public function search(){
      $search = $_GET['name'];
      $subjects = subject::where('subject','LIKE', '%'.$search.'%')->get();
    
      return view('pamitha/search',compact('subjects'));
     
    }

    public function getTute(){

      $tute = subject::all();

      return view('pamitha/subjectRP', compact('tute'));

      return view('pamitha/subjectRP', compact('tute'));

      return view('subjectRP', compact('tute'));


      return view('pamitha/printS', compact('tute'));
     }

     public function downlodPDF(){

      $tute = subject::all();
      $pdf = PDF::loadView('pamitha/printS', compact('tute'));
      return $pdf->download('Tute.pdf');
     }
    
}
