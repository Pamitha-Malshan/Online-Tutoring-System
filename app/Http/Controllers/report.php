<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class report extends Controller
{
    public function PieChart()
    {
        $data = DB::table('delivaries')
           ->select(
          
            DB::raw('isimplement as isimplement'),
            DB::raw('count(*) as number'))
           ->groupBy('isimplement')
           ->get();
        $array[] = ['isimplement', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->isimplement, $value->number];
        }
     
        return view('pamitha/Report')->with('isimplement', json_encode($array));
    }

    public function DChart()
    {
        $data = DB::table('delivaries')
           ->select(
          
            DB::raw('dname as dname'),
            DB::raw('count(*) as number'))
           ->groupBy('dname')
           ->get();
        $array[] = ['dname', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->dname, $value->number];
        }
     
        return view('pamitha/ReportD')->with('dname', json_encode($array)); 
    }

    public function SChart()
    {
        $data = DB::table('pdfs')
           ->select(
          
            DB::raw('subject as subject'),
            DB::raw('count(*) as number'))
           ->groupBy('subject')
           ->get();
        $array[] = ['subject', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->subject, $value->number];
        }
     
        return view('pamitha/ReportS')->with('subject', json_encode($array));

      
    }
   
}


