<?php
/*Mendis T . C. U*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cartviewcontroller;
use App\Http\Controllers\detailscontroller;
use App\Http\Controllers\Finandashbordcontroller;
use App\Http\Controllers\TeacherSalarycontroller;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\DB;
/***********************************************/

use App\Http\Controllers\classController;
use App\Http\Controllers\recController;
use app\Http\Controllers;
use app\Http\Controllers\insertsubject;
use app\Http\Controllers\tdelivary;
use app\Http\Controllers\man;
use App\Http\Controllers\DynamicPDFControllerLH;
use App\Models\subject;
use App\Models\pdf;
use App\Models\delivary;

use App\Http\Controllers\checkpayclontroller;
use App\Http\Controllers\olevelcontroller;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* IT20127046 - Loshith Samararathne */

Route::get('/examHome', function () {
    return view('manageExamHome');
});

/* For Test */
Route::get('/test', function () {
    return view('test');
});

Route::get('/exam', function () {
    $data = App\Models\Exam::all();
    return view('manageExam')->with('manageExam', $data);
});
Route::get('/addexam', function () {
    return view('addExam');
});
Route::get('/updateExam', function () {
    return view('updateExam');
});

Route::get('/addQusetion', function () {
    return view('addQuestion');
});

Route::post('/insertExam', 'App\Http\Controllers\ExamController@insert');
Route::get('/deleteExam/{id}', 'App\Http\Controllers\ExamController@delete');
Route::get('/updateExam/{id}', 'App\Http\Controllers\ExamController@update');
Route::post('/updateExamNext', 'App\Http\Controllers\ExamController@updateExamNext');

Route::get('/insertQues/{id}', 'App\Http\Controllers\QuestionController@getQues');
Route::post('/insertQuestion', 'App\Http\Controllers\QuestionController@insert');

Route::get('/classol/{class}', 'App\Http\Controllers\ExamController@selectClass');

/* Result Page */
Route::get('/dresult', [DynamicPDFControllerLH::class, 'getAllResult']);

/* Download PDF */
Route::get('/dresult-pdf', [DynamicPDFControllerLH::class, 'downloadPDF']);









/* IT20128036 - Kumarasinghe K.M.K.D */






//Route::get('/class',[frontcontroller::class,'classview']);



Route::get('/classes', function () {
    return view('class');
});





Route::get('/classview', function () {
    $data=App\Models\ClassData::all();
    return view('classview')->with('classview',$data);
});





Route::post('/addClass',[classController::class,'store']);






Route::get('/markas/{id}',[classController::class,'updatemarkas']);



Route::get('/markasnot/{id}',[classController::class,'updatemarkasnot']);



Route::get('/deleteclass/{id}',[classController::class,'deleteclass']);


Route::get('/updateclass/{id}',[classController::class,'updateclass']);

Route::post('/updatedclass',[classController::class,'updatedclass']);



Route::get('/classcategory', function () {
    return view('classes');
});



Route::get('/sclassview', function () {
    $data=App\Models\ClassData::all();
    return view('sclassview')->with('classview',$data);
});




Route::get('/selectclass', function () {
    return view('selectclass');
});





Route::get('/recclass', function () {
    return view('recclass');
});





Route::get('/recclassview', function () {
    $data=App\Models\recClass::all();
    return view('recclassview')->with('recclassview',$data);
});




Route::post('/addrecClass',[recController::class,'store']);






Route::get('/recmarkas/{id}',[recController::class,'updatemarkas']);



Route::get('/recmarkasnot/{id}',[recController::class,'updatemarkasnot']);




Route::get('/deleterecclass/{id}',[recController::class,'deleteclass']);





Route::get('/updaterecclass/{id}',[recController::class,'updateclass']);

Route::post('/updatedrecclass',[recController::class,'updatedclass']);






Route::get('/srecview', function () {
    $data=App\Models\recClass::all();
    return view('srecview')->with('recclassview',$data);
});







//calculation-----------------------


Route::post('/paycal',[recController::class,'paycal']);




Route::get('/checkpay', function () {
    
   return view('/checkpay');
});




//Route::post('/checkpay',[recController::class,'paycal']);





Route::get('/admincmanage', function () {
    
    return view('/adminclassmanage');
 });
 





 Route::get('/searchclassid',[classController::class,'searchclass']);

 Route::get('/ssearchclassid',[classController::class,'ssearchclass']);



 Route::get('/searchrecclassid',[recController::class,'searchrecclass']);


 Route::get('/ssearchrecclassid',[recController::class,'ssearchrecclass']);
 


//r route
Route::get('/gencreport',[reportController::class,'getgenreport']);
Route::get('/rrepid',[reportController::class,'downloadPPDF']);
Route::get('/repid',[reportController::class,'downloadPDF']);




 

//pay check
Route::post('/checkcpay',[checkpayclontroller::class,'check'])->name('login.check');




//addolclass

Route::post('/addolClass',[olevelcontroller::class,'store']);

Route::get('/addolclassv', function () {
    return view('addolevelclass');
});




Route::get('/olclassview', function () {
    $data=App\Models\olevel::all();
    return view('olevelview')->with('classview',$data);
});



Route::get('/olmarkas/{id}',[olevelcontroller::class,'updatemarkas']);



Route::get('/olmarkasnot/{id}',[olevelcontroller::class,'updatemarkasnot']);



Route::get('/deleteolclass/{id}',[olevelcontroller::class,'deleteclass']);


Route::get('/updateolclass/{id}',[olevelcontroller::class,'updateclass']);

Route::post('/updatedolclass',[olevelcontroller::class,'updatedclass']);


Route::get('/solclassview', function () {
    $data=App\Models\olevel::all();
    return view('solclassview')->with('classview',$data);
});





Route::get('/searcholclassid',[olevelcontroller::class,'searchclass']);

Route::get('/ssearcholclassid',[olevelcontroller::class,'ssearchclass']);

 

//adminmain


Route::get('/adminmain', function () {
    return view('adminmainhome');
});

//-----------------------------------------------











/* IT20131456 - Mendis T.C.U */



Route::resource('cartview',Cartviewcontroller::class);

Route::resource('details',detailscontroller::class);

Route::resource('financial',Finandashbordcontroller::class);

Route::get('payment',[detailscontroller::class,'addPaymentinfo']);

Route::post('payment',[detailscontroller::class,'storepaymentinfo'])->name('details.store');

Route::get('paymentsummary',[detailscontroller::class,'payment']);

Route::get('edit_payment_info/{id}',[detailscontroller::class,'editpaymentinfo']);

Route::post('update_payment_info',[detailscontroller::class,'updatepaymentinfo'])->name('details.update');

Route::get('paymentsuccess',[detailscontroller::class,'success']);

Route::get('/search',[detailscontroller::class,'search']);

Route::resource('salary',TeacherSalarycontroller::class);

Route::get('teachsalary',[TeacherSalarycontroller::class,'addsalaryinfo']);

Route::post('teachsalary',[TeacherSalarycontroller::class,'addsalaryinfo'])->name('teachersalary.store');

Route::get('/edit_student/{id}',[TeacherSalarycontroller::class,'editsalary']);

Route::post('/update_salary_info',[TeacherSalarycontroller::class,'updatesalary'])->name('teachsalary.update');

Route::get('/search-teacher',[TeacherSalarycontroller::class,'searchteacher']);

Route::get('/foot', function () {
    return view('footer');
});

Route::get('/message',[MessageController::class,'message']);

Route::post('/email_send',[MessageController::class,'sendEmail'])->name('message.send');

Route::get('/reports',[ReportController::class,'getAllReport']);

Route::get('/reportdownload',[ReportController::class,'report']);






//-----------------------------------------------


/* IT20128722 - Ranasgala R.C.S */





/* IT20127800 - Perera M.A.P.M */

Route::get('/rhome', function () {
    return view('pamitha/Rhome');
});

Route::get('/print', function () {
    return view('pamitha/printS');
});

Route::get('/delivery', function () {
    $data=delivary::all();
    return view('pamitha/Delivery')->with('dely',$data);

});

Route::get('/grade6', function () {
    $data=subject::all();
    return view('pamitha/subjectinsert')->with('subjects',$data);
});
Route::get('/AL', function () {
    $data=subject::all();
    return view('pamitha/AL')->with('subjects',$data);
}); 
Route::get('/OL', function () {
    $data=subject::all();
    return view('pamitha/OL')->with('subjects',$data);
});
Route::get('/Dman', function () {
    $data=delivary::all();
    return view('pamitha/Dman')->with('dely',$data);
});
Route::get('/pdf', function () {
    $data=pdf::all();
    return view('pamitha/pdfinsert')->with('pdfs',$data);
});
Route::get('/pdfR', function () {
    $data=pdf::all();
    return view('pamitha/pdfretrive')->with('pdfs',$data);
});
Route::get('/tsearch', function () {
    $data=subject::all();
    return view('pamitha/search')->with('subjects',$data);
});
Route::get('/tsearch','App\Http\Controllers\insertsubject@search');
Route::get('/searchpdf','App\Http\Controllers\pdfd@search');

Route::post('/saveinsert', 'App\Http\Controllers\insertsubject@store') ;
Route::get('/ddeletetask/{id}','App\Http\Controllers\insertsubject@delete');
Route::get('/updatetask/{id}','App\Http\Controllers\insertsubject@update');
Route::get('/updateAL/{id}','App\Http\Controllers\insertsubject@updateAL');
Route::get('/updateOL/{id}','App\Http\Controllers\insertsubject@updateOL');
Route::get('/updatesubject/{id}','App\Http\Controllers\insertsubject@updatesubject');
Route::post('/update', 'App\Http\Controllers\insertsubject@updatedata') ;
Route::post('/updateA', 'App\Http\Controllers\insertsubject@updatedataA') ;
Route::post('/updateO', 'App\Http\Controllers\insertsubject@updatedataO') ;

Route::get('/sreport','App\Http\Controllers\insertsubject@getTute');
Route::get('/downloadreport','App\Http\Controllers\insertsubject@downlodPDF');


Route::post('/delivery', 'App\Http\Controllers\tdelivary@insert') ;
Route::get('/deletdy/{id}','App\Http\Controllers\tdelivary@delete');
Route::get('/updatdy/{id}','App\Http\Controllers\tdelivary@update');
Route::post('/updated', 'App\Http\Controllers\tdelivary@updatest') ;

Route::get('/deliveryr/{id}','App\Http\Controllers\tdelivary@pdf');
Route::get('/deliverypdf/{id}','App\Http\Controllers\tdelivary@downlodPDF');

Route::get('/complete/{id}','App\Http\Controllers\tdelivary@com');
Route::post('/up', 'App\Http\Controllers\tdelivary@complete') ;

Route::get('/delivery/{id}','App\Http\Controllers\tdelivary@update');
Route::post('/comt', 'App\Http\Controllers\man@up') ;

Route::post('/file', 'App\Http\Controllers\pdfd@pdf');
Route::get('/files/{id}','App\Http\Controllers\pdfd@show');
Route::get('/deletepdf/{id}','App\Http\Controllers\pdfd@delete');
Route::get('/download/{file}','App\Http\Controllers\pdfd@download');
Route::get('/view/{id}','App\Http\Controllers\pdfd@view');

Route::get('report', 'App\Http\Controllers\report@PieChart');
Route::get('reportD', 'App\Http\Controllers\report@DChart');
Route::get('reportS', 'App\Http\Controllers\report@SChart');





/* IT20028114 - Wathsala H.K.R */




/* IT20034986 - Watawala D.A */

/* IT20113872 - Edirisinghe S.A */
//Live Support

Route::get('/msg', function () {
    return view('index');
});

Route::match(['get','post'],'/send-message',function (Request $request){
event(
    new Message(
        $request->input('username'),
        $request->input('message')
    )
);

return ["success"=>true];

});
///////////////////////////////////////////////////////////////////////////



//Admin Page

Route::get('/admin', function () {
    return view('adminpage');
});


//User Rating

Route::match(['get','post'],'/ratingform','ratingcontroller@rating');




Route::get('/rat', function () {
    $data=App\Models\Review::all();
    return view('adminrateviw')->with('task',$data);
});


Route::match(['get','post'],'/rat','ratingcontroller@getdatafromdb');






/////////////////////////////////
///manage feedback 


Route::get('/updatefeedback', function () {
    //$task=App\Models\Review::all();
    //return view('updatefeedback')->with('task',$task);
    return view('updatefeedback');

});


//Route::match(['get','post'],'/find/{id}','ratingcontroller@find');

Route::match(['get','post'],'/find','ratingcontroller@find');


Route::get('/updatecomment', function () {
    $task=App\Models\Review::all();
    return view('updatecomment')->with('task',$task);
});


Route::match(['get','post'],'/updatetaskss','ratingcontroller@updatetask');


//Route::get('/updatefeedback', function () {
  //  $task=App\Models\Review::all();
   // return view('updatefeedback')->with('task',$task);
    //return view('updatefeedback');

//});


//////////////////////////////
//delete task
Route::match(['get','post'],'/deletetask/{id}','ratingcontroller@delettask');