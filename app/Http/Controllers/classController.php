<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassData;

class classController extends Controller
{
   public function store(Request $request){
   //dd($request->all());
   $this->validate($request,[
   'cid'=>'required|max:120|min:3',
   'sid'=>'required|max:120|min:3',
   'date'=>'required|max:120|min:3',
   'time'=>'required|max:120|min:3',
   'handler'=>'required|max:120|min:3',
   'link'=>'required|max:120|min:3',

]);


    $classdata =new ClassData;
    $classdata->cid=$request->cid;
    $classdata->sid=$request->sid;
    $classdata->date=$request->date;
    $classdata->time=$request->time;
    $classdata->handler=$request->handler;
    $classdata->link=$request->link;
    $classdata->save();


    $data=ClassData::all();
    //dd($data);
    //return view('classview')->with('classview',$data);
    return redirect('classview')->with('message', 'Added Successfully!');




   }


  public function updatemarkas($id){

    $class=ClassData::find($id);
    $class->isfinished = 1;
    $class->save();
    return redirect()->back()->with('ucmessage', 'Changed Successfully!');

  }



  public function updatemarkasnot($id){
     $class=ClassData::find($id);
     $class->isfinished = 0;
     $class->save();
     return redirect()->back()->with('ucnmessage', 'Changed Successfully!');
  }


  public function deleteclass($id){
     $class=ClassData::find($id);
     $class->delete();
     return redirect()->back()->with('dmessage', 'Deleted Successfully!');
  }


  public function updateclass($id){
     $class=ClassData::find($id);

     return view('updateview')->with('classdata',$class);
  }


  public function updatedclass(Request $request){
     //dd($request);
     $id=$request->id;
     $cid=$request->cid;
     $sid=$request->sid;
     $date=$request->date;
     $time=$request->time;
     $handler=$request->handler;
     $link=$request->link;

     $data=ClassData::find($id);
     $data->cid=$cid;
     $data->sid=$sid;
     $data->date=$date;
     $data->time=$time;
     $data->handler=$handler;
     $data->link=$link;

     $data->save();
     $data=ClassData::all();
     return redirect('classview')->with('umessage', 'Updated Successfully!');


  }



  
  public function searchclass(Request $request){
   //dd($request->all());


   $search=$request->get('search');

   

   $result=ClassData::where('cid','like', '%'.$search.'%')
   ->orwhere('sid','like', '%'.$search.'%')
   ->orwhere('date','like', '%'.$search.'%')
   ->orwhere('handler','like', '%'.$search.'%')->paginate(5);
   //return view('showsearch',['show' => $result]);


   return view('classview',['classview' => $result]);
   
   

   //$class=ClassData::find($id);
   //$class->delete();
   //return redirect()->back()->with('dmessage', 'Deleted Successfully!');
}




public function ssearchclass(Request $request){
   //dd($request->all());


   $search=$request->get('search');

   

   $result=ClassData::where('cid','like', '%'.$search.'%')
   ->orwhere('sid','like', '%'.$search.'%')
   ->orwhere('date','like', '%'.$search.'%')
   ->orwhere('handler','like', '%'.$search.'%')->paginate(5);
   //return view('showsearch',['show' => $result]);


   return view('sclassview',['classview' => $result]);
   
   

   //$class=ClassData::find($id);
   //$class->delete();
   //return redirect()->back()->with('dmessage', 'Deleted Successfully!');
}


}
