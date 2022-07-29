<?php

namespace App\Http\Controllers;
use App\Models\details;
use Illuminate\Http\Request;
use PDF;

class PaymentReportConroller extends Controller
{
  
    public function getAllReport(){

        $reports = details::all();
        $totfees =details::gettotal();    
        return view('report')->with(compact('reports','totfees')) ;//

    }


    public function report(){

        $reports = details::all();
        $totfees =details::gettotal();    
        $pdf = PDF::loadView('report',compact('reports','totfees'));
        return $pdf->download('reports.pdf');

    }
}

