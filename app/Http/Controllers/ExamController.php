<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function insert(Request $request) {

        //dd($request->all());
        $exam = new Exam;

        $exam->class=$request->selectClass;
        $exam->exam=$request->selectExam;
        $exam->examType=$request->selectType;
        $exam->examDate=$request->examDate;
        $exam->startTime=$request->startTime;
        $exam->endTime=$request->endTime;
        $exam->duration=$request->duration;
        $exam->totMarks=$request->totMarks;
        $exam->noOfQues=$request->noOfQues;
        $exam->save();

        $data = Exam::all();
        return view('manageExam')->with('manageExam', $data);

    }

    public function update($id) {
        $exam = Exam::find($id);
        return view('updateExam')->with('updateExam', $exam);
    }

    public function updateExamNext(Request $request) {
        //dd($request);
        $id=$request->id;
        $class=$request->selectClass;
        $exam=$request->selectExam;
        $examType=$request->selectType;
        $examDate=$request->examDate;
        $startTime=$request->startTime;
        $endTime=$request->endTime;
        $duration=$request->duration;
        $totMarks=$request->totMarks;
        $noOfQues=$request->noOfQues;

        $data = Exam::find($id);

        $data->class=$class;
        $data->exam=$exam;
        $data->examType=$examType;
        $data->examDate=$examDate;
        $data->startTime=$startTime;
        $data->endTime=$endTime;
        $data->duration=$duration;
        $data->totMarks=$totMarks;
        $data->noOfQues=$noOfQues;

        $data->save();

        $getData = Exam::all();
        return view('manageExam')->with('manageExam', $getData);
    }

    public function delete($examid) {
        $examid = Exam::find($examid);
        $examid->delete();
        
        return redirect()->back();
    }


    public function selectClass($class) {
        $getClass = Exam::where('class', $class)->get();
        return view('examClassView')->with('classGet', $getClass);
    }
}
