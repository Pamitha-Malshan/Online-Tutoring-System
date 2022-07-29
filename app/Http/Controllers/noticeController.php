<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notic;

class noticeController extends Controller
{
    public function store(Request $request){
        
        $this->validate($request,[
        'no'=>'required|max:120|min:3',
        'title'=>'required|max:120|min:3',
        'date'=>'required|max:120|min:3',
        'time'=>'required|max:120|min:3',
        'notice'=>'required|max:120|min:3',
         
     
     ]);
     
     
         $noticedata =new notic;
         $noticedata->no=$request->no;
         $noticedata->title=$request->title;
         $noticedata->date=$request->date;
         $noticedata->time=$request->time;
         $noticedata->notice=$request->notice;
         $noticedata->save();
     
     
         $data=notic::all();
 
          
         return redirect('noticeview')->with('message', 'Added Successfully!');

     
     
        }


        
  public function deletenotice($id){
    $notice=notic::find($id);
    $notice->delete();
    return redirect()->back()->with('dmessage', 'Deleted Successfully!');
 }




 public function updatenotice($id){
    $notice=notic::find($id);

    return view('updatenoticeview')->with('noticedata',$notice);
 }


 
 public function updatednotice(Request $request){
    //dd($request);
    $id=$request->id;
    $no=$request->no;
    $title=$request->title;
    $date=$request->date;
    $time=$request->time;
    $notice=$request->notice;

    $data=notic::find($id);
    $data->no=$no;
    $data->title=$title;
    $data->date=$date;
    $data->time=$time;
    $data->notice=$notice;


    $data->save();
    $data=notic::all();
    return redirect('noticeview')->with('umessage', 'Updated Successfully!');


 }





     
}
