<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentResult;
use App\Models\StudentExamComplete;
use PDF;
use DB;

class DynamicPDFControllerLH extends Controller
{
    public function getAllResult() {
        // Get All Students Mark
        $result = StudentResult::all();

        // Get No of Rows wit Students Mark
        // Get All Count
        $countAll = DB::table('student_results')
                    ->count();

        // Get 74<mark<100 - A
        $countA = DB::table('student_results')
                    ->where('studentMark', '>', 74)
                    ->where('studentMark', '<', 101)
                    ->count();

        // Get 59<mark<75  - B
        $countB = DB::table('student_results')
                    ->where('studentMark', '>', 64)
                    ->where('studentMark', '<', 75)
                    ->count();

        // Get 49<mark<60  - C
        $countC = DB::table('student_results')
                    ->where('studentMark', '>', 49)
                    ->where('studentMark', '<', 65)
                    ->count();

        // Get 34<mark<50  - S
        $countS = DB::table('student_results')
                    ->where('studentMark', '>', 34)
                    ->where('studentMark', '<', 50)
                    ->count();

        // Get mark<35     - W
        $countW = DB::table('student_results')
                    ->where('studentMark', '<', 35)
                    ->count();


        // Get No of Students
        $noOfStudents = DB::table('student_exam_completes')
                        ->count();

        // Get No of Students - Completed
        $noOfStudentsCompleted = DB::table('student_exam_completes')
                        ->where('isCompleted', '=', 1)
                        ->count();

        // Get No of Students - Not Completed
        $noOfStudentsNotCompleted = DB::table('student_exam_completes')
                        ->where('isCompleted', '=', 0)
                        ->count();
        
        return view('displayResult', compact('result'))
                    ->with('countA', $countA)
                    ->with('countB', $countB)
                    ->with('countC', $countC)
                    ->with('countS', $countS)
                    ->with('countW', $countW)
                    ->with('countAll', $countAll)
                    ->with('noOfStudents', $noOfStudents)
                    ->with('noOfStudentsCompleted', $noOfStudentsCompleted)
                    ->with('noOfStudentsNotCompleted', $noOfStudentsNotCompleted);
    }

    public function downloadPDF() {
        $result = StudentResult::all();
        $pdf = PDF::loadView('dynamicPDFLH', compact('result'))->stream();
        return $pdf;
    }
}
