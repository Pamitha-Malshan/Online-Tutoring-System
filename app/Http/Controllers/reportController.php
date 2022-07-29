<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassData;
use PDF;
use DB;

class reportController extends Controller
{
    public function getRepoDetails(){
        $classData = ClassData::all();
        return view('reportData',compact('classData'));

    }


    public function downloadPDF(Request $request){
        //req serach
        $search=$request->get('search');
        $date=$request->get('date');
        //new search
        $classData=ClassData::where('date','like', '%'.$date.'%')
        ->orwhere('cid','like', '%'.$search.'%')
        ->where('sid','like', '%'.$search.'%')       
        ->where('handler','like', '%'.$search.'%')->paginate(5);

       // $classData = ClassData::all();
         
        

        $pdf = PDF::loadView('reportData', compact('classData'));
        return $pdf->download('reportData.pdf');
    }








//working
    function index(){
  

        $class_data = $this->get_classData();
        return view('reportData')->with('class_data', $class_data);
    }


    function get_classData(){
        
        
        $class_data = DB::table('class_data')
                     ->limit(10)  
                     ->get();
 

      //----------------



        return $class_data;                    

    }


    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->
               convert_class_data_to_html());
        return $pdf->stream();       

    }

    function convert_class_data_to_html(){
        $class_data = $this->get_classData();
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




    //orginal report
    public function getgenreport(){
        $classData = ClassData::all();
        return view('gencreport',compact('classData'));

    }




    public function downloadPPDF(Request $request){
        //req serach
        $search=$request->get('search');
        $date=$request->get('date');
        //new search
        $classData=ClassData::where('date','like', '%'.$date.'%')
        ->orwhere('cid','like', '%'.$search.'%')
        ->where('sid','like', '%'.$search.'%')       
        ->where('handler','like', '%'.$search.'%')->paginate(5);

       // $classData = ClassData::all();
         
        

        $pdf = PDF::loadView('gencreport', compact('classData'));
        return $pdf->download('reportData.pdf');
    }









}
