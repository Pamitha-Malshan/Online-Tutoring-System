<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\olevel;

class olevelcontroller extends Controller
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


    $classdata =new olevel;
    $classdata->cid=$request->cid;
    $classdata->sid=$request->sid;
    $classdata->date=$request->date;
    $classdata->time=$request->time;
    $classdata->handler=$request->handler;
    $classdata->link=$request->link;
    $classdata->save();


    $data=olevel::all();
    //dd($data);
    //return view('classview')->with('classview',$data);
    return redirect('olclassview')->with('message', 'Added Successfully!');




   }


  public function updatemarkas($id){

    $class=olevel::find($id);
    $class->isfinished = 1;
    $class->save();
    return redirect()->back()->with('ucmessage', 'Changed Successfully!');

  }



  public function updatemarkasnot($id){
     $class=olevel::find($id);
     $class->isfinished = 0;
     $class->save();
     return redirect()->back()->with('ucnmessage', 'Changed Successfully!');
  }


  public function deleteclass($id){
     $class=olevel::find($id);
     $class->delete();
     return redirect()->back()->with('dmessage', 'Deleted Successfully!');
  }


  public function updateclass($id){
     $class=olevel::find($id);

     return view('updateolview')->with('classdata',$class);
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

     $data=olevel::find($id);
     $data->cid=$cid;
     $data->sid=$sid;
     $data->date=$date;
     $data->time=$time;
     $data->handler=$handler;
     $data->link=$link;

     $data->save();
     $data=olevel::all();
     return redirect('olclassview')->with('umessage', 'Updated Successfully!');


  }



  
  public function searchclass(Request $request){
   //dd($request->all());


   $search=$request->get('search');

   

   $result=olevel::where('cid','like', '%'.$search.'%')
   ->orwhere('sid','like', '%'.$search.'%')
   ->orwhere('date','like', '%'.$search.'%')
   ->orwhere('handler','like', '%'.$search.'%')->paginate(5);
   //return view('showsearch',['show' => $result]);


   return view('olevelview',['classview' => $result]);
   
   

   //$class=ClassData::find($id);
   //$class->delete();
   //return redirect()->back()->with('dmessage', 'Deleted Successfully!');
}




public function ssearchclass(Request $request){
   //dd($request->all());


   $search=$request->get('search');

   

   $result=olevel::where('cid','like', '%'.$search.'%')
   ->orwhere('sid','like', '%'.$search.'%')
   ->orwhere('date','like', '%'.$search.'%')
   ->orwhere('handler','like', '%'.$search.'%')->paginate(5);
   //return view('showsearch',['show' => $result]);


   return view('solclassview',['classview' => $result]);
   
   

   //$class=ClassData::find($id);
   //$class->delete();
   //return redirect()->back()->with('dmessage', 'Deleted Successfully!');
}







//pdf 

 








function pdf(){
   $pdf = \App::make('dompdf.wrapper');
   $pdf->loadHTML($this->
          convert_class_data_to_html());
   return $pdf->stream();       

}

function convert_class_data_to_html(){
   $class_data = $this->ssearchclass();
   $output = '
   <h3 align="center">Customer Data</h3>
   <table width="100%" style="border-collapse: collapse; border: 0px;">
    <tr>
  <th style="border: 1px solid; padding:12px;" width="20%">Grade</th>
  <th style="border: 1px solid; padding:12px;" width="30%">Subject</th>
  <th style="border: 1px solid; padding:12px;" width="15%">Date</th>
  <th style="border: 1px solid; padding:12px;" width="15%">Time</th>
   
 </tr>
   ';  
   foreach($class_data as $class)
   {
    $output .= '
    <tr>
     <td style="border: 1px solid; padding:12px;">'.$class->cid.'</td>
     <td style="border: 1px solid; padding:12px;">'.$class->sid.'</td>
     <td style="border: 1px solid; padding:12px;">'.$class->date.'</td>
     <td style="border: 1px solid; padding:12px;">'.$class->time.'</td>
      
    </tr>
   
   
   ';
}

$output .= '</table>';
return $output;
}






}
