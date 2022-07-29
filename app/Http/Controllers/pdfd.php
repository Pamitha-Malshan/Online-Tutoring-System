<?php

namespace App\Http\Controllers;
use App\Models\pdf;
use Illuminate\Http\Request;

use App\resources\views\pdfinsert;
use App\resources\views\pdfview;
use public\storage;
use Illuminate\Support\Facades\Response;

class pdfd extends Controller
{
    public function pdf(Request $request){
        //dd($request);
        $data= new pdf;
        
            if($request->file('file')){
            $file=$request->file('file');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('stopdf/'. $filename);
            $data->file=$filename;
            }

        $data->subject = $request->name;
        $data->grade = $request->grade;
        $data->description = $request->ds;
        $data->file= $request->file;
        
       $data->save();
       return redirect()->back();
}
public function index(){
$file= pdf::all();
return view('pamitha/pdfinsert')->with('pdfs',$file);
return redirect()->back();
return view('pamitha/pdfretrive')->with('pdfs',$file);
}

public function search(){
  $search = $_GET['grade'];
  $subjects = pdf::where('grade','LIKE', '%'.$search.'%')->get();

  return view('pamitha/pdfsearch',compact('subjects'));
 
}

public function delete($id){
  $task=pdf::find($id);
  $task->delete();
 return redirect()->back();
}

public function download($file){
    return response()->download('stopdf/'.$file);
}

public function view($id){

  $data = pdf::find($id);
  return view('pamitha/pdfview', compact('data'));
}
}
