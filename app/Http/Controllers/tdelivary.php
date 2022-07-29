<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\delivary;
use App\resources\views\insertdelivary;
use App\resources\views\Delivery;
class tdelivary extends Controller
{
    public function insert(Request $request){

        $delivary= new delivary;

        $delivary->dcode = $request->dcode;
        $delivary->dname = $request->dname;
        $delivary->studentid = $request->sid;
        $delivary->studentname= $request->sname;
        $delivary->studentaddress= $request->saddress;
        $delivary->tute= $request->tute;

        $delivary->save();
 
       $data=delivary::all();
          
       return view('pamitha/Delivery')->with('dely',$data);
      
    }

    public function update($id){
        $task=delivary::find($id);
        return view('pamitha/updatedelivery')->with('dely',$task);
        
      }
    public  function updatest(Request $request){
      // dd($request);
        $id=$request->id;
       $ucode=$request->ucode;
       $uname=$request->uname;
       $ustudentid=$request->uid;
       $ustudentname=$request->udname;
       $ustudentaddress=$request->uaddress;
       $utute=$request->utute;


       $data=delivary::find($id);
       $data->dcode=$ucode;
       $data->dname=$uname;
       $data->studentid=$ustudentid;
       $data->studentname=$ustudentname;
       $data->studentaddress=$ustudentaddress;
       $data->tute=$utute;
       
       $data->save();
      $tasks=delivary::all();

       return view('pamitha/Delivery')->with('dely',$tasks);
       
    } 

    public function com($id){
      $task=delivary::find($id);
      return view('pamitha/complete')->with('dely',$task);
      
    }

    public  function complete(Request $request){
      // dd($request);
        $id=$request->id;
      
       $finish=$request->finish;

       $data=delivary::find($id);
      
       $data->isimplement=$finish;
       $data->save();
      $tasks=delivary::all();

       return view('pamitha/Dman')->with('dely',$tasks);
       
    } 


    public function delete($id){
    
          $task=delivary::find($id);
          $task->delete();
         return redirect()->back();
    }

    public function pdf($id){

      //  $dely= delivary::find($id);
      //  return view('pamitha/deliveryreport', compact('dely'));
  
        $task=delivary::find($id);
        return view('pamitha/deliveryreport')->with('task',$task);
        return view('pamitha/printD')->with('task',$task);
       }
  
       public function downlodPDF($id){
  
        $task = delivary::find($id);
        $pdf = PDF::loadView('pamitha/printD',compact('task'));
        return $pdf->download('Delivery.pdf');
       }
}
