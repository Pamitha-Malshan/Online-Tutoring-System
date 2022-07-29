<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\mcqQuestion;

class QuestionController extends Controller
{
    public function getQues($id) {
        $noOfQuestions = Exam::find($id);
        $questions = mcqQuestion::all();
        return view('manageQuestion')->with('examQuestions', $noOfQuestions)->with('questions', $questions);
    }

    public function insert(Request $request) {

        //dd($request->all());
        $question = new mcqQuestion;

        $question->examid=$request->examid;
        $question->questionNo=$request->selectQuestionNo;
        $question->question=$request->question;
        $question->answer01=$request->answer01;
        $question->answer02=$request->answer02;
        $question->answer03=$request->answer03;
        $question->answer04=$request->answer04;
        $question->correctAnswer=$request->correctAnswer;
        $question->allocateMark=$request->allocateMark;
        $question->isAdd=$request->isAdd;
        $question->save();

        //$data = Exam::all();
        //return view('manageExam')->with('manageExam', $data);
        $id = '18';
        $questions = Exam::find($id);
        $questions = mcqQuestion::all();
        return view('/manageExamHome');
    }
}
