<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ratingcontroller extends Controller
{
    public function rating(Request $request){
        //dd($request->all());
    
        $task=new Review; 
        $task->rating=$request->star;
      
        $task->comment=$request->msg;
        $task->save();
        return redirect()->back();


    }

    public function getdatafromdb(){

        $data=Review::all();
        return view('adminrateviw')->with('task',$data);

    }
    
    /////////////////////////////////////////////////////////////////////////

    

    public function find(Request $request){

        $data=Review::all();

        $id=$request->id;
        $task=Review::find($id);
     //dd($task);
        return view('updatecomment')->with('task',$task);
 //dd($request->all());
    }


    public function updatetask(Request $request){
        $id=$request->id;
        $task=$request->comment;
        $data=Review::find($id);
        

        $data->comment=$task;
    
      $data->save();


        $datas=Review::find($id);
        return view('updatecomment')->with('task',$datas);
        //dd($request->all());
           //dd($data);
       }


       public function delettask($id){

//dd($id);

        $task=Review::find($id);
       $task->delete();   
       return view('updatecomment')->with('task',$task);
    }


}
