<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recClass;

class recController extends Controller
{
   public function store(Request $request){
   //dd($request->all());
   $this->validate($request,[
   'sub'=>'required|max:120|min:3',
   'grade'=>'required|max:120|min:3',
   'duration'=>'required|max:120|min:3',
   'recdate'=>'required|max:120|min:3',
   'handler'=>'required|max:120|min:3',
   'link'=>'required|max:120|min:3',

]);


    $recclassdata =new recClass;
    $recclassdata->sub=$request->sub;
    $recclassdata->grade=$request->grade;
    $recclassdata->duration=$request->duration;
    $recclassdata->recdate=$request->recdate;
    $recclassdata->handler=$request->handler;
    $recclassdata->link=$request->link;
    $recclassdata->save();


    $data=recClass::all();
    //dd($data);
    //return view('classview')->with('classview',$data);
    return redirect('recclassview')->with('message', 'Added Successfully!');




   }


  public function updatemarkas($id){

    $recclass=recClass::find($id);
    $recclass->isfinished = 1;
    $recclass->save();
    return redirect()->back()->with('ucmessage', 'Changed Successfully!');

  }



  public function updatemarkasnot($id){
     $recclass=recClass::find($id);
     $recclass->isfinished = 0;
     $recclass->save();
     return redirect()->back()->with('ucnmessage', 'Changed Successfully!');
  }


  public function deleteclass($id){
     $recclass=recClass::find($id);
     $recclass->delete();
     return redirect()->back()->with('dmessage', 'Deleted Successfully!');
  }


  public function updateclass($id){
     $recclass=recClass::find($id);

     return view('updaterecview')->with('recclassdata',$recclass);
  }


  public function updatedclass(Request $request){
     //dd($request);
     $id=$request->id;
     $sub=$request->sub;
     $grade=$request->grade;
     $duration=$request->duration;
     $recdate=$request->recdate;
     $handler=$request->handler;
     $link=$request->link;

     $data=recClass::find($id);
     $data->sub=$sub;
     $data->grade=$grade;
     $data->duration=$duration;
     $data->recdate=$recdate;
     $data->handler=$handler;
     $data->link=$link;

     $data->save();
     $data=recClass::all();
     return redirect('recclassview')->with('umessage', 'Updated Successfully!');


  }


  public function paycal(Request $request){
     //$fee1=$request->category[1];

     $this->validate($request,[
      'category'=>'required_without_all',
   
   ]);

   $fee1=$request->grade;

   $summ=0;
   if($fee1==7){
      $summ=100;
   }else if($fee1==8){
      $summ=200;
   }else if($fee1==9){
      $summ=300;
   }else if($fee1==10){
      $summ=400;
   }else if($fee1==11){
      $summ=500;
   }else{
      $summ=0;
   }


     
     foreach($request->category as $key=>$name){
       if(!empty($request->category[$key])){
       $summ=$request->category[$key]+$summ;

       }else{
          return redirect->back();
       }



     }


   
     //$request->category[0]=0;
     //$request->category[1]=0;
     //$request->category[2]=0;
     //$request->category[3]=0;
     
     
 /*    
     $input = $request->all();
     $sum=0;


if($request->category[0]=null){
   $request->category[0]=0;
}elseif($request->category[1]=null){
   $request->category[1]=0;
}elseif($request->category[2]=null){
   $request->category[2]=0;
}elseif($request->category[3]=null){
   $request->category[3]=0;    
}


     $sum = $request->category[0] +$request->category[1]+ $request->category[2]+ $request->category[3] ;

*/
     $total=0;
     $total=$summ;
     //return view('checkpay',compact($total));
     //dd($total);
     return view('viewfees')->with('data',$total);
  }


  
  public function searchrecclass(Request $request){
   //dd($request->all());


   $search=$request->get('search');

   

   $result=recClass::where('sub','like', '%'.$search.'%')
   ->orwhere('grade','like', '%'.$search.'%')
   ->orwhere('duration','like', '%'.$search.'%')
   ->orwhere('handler','like', '%'.$search.'%')->paginate(5);
   //return view('showsearch',['show' => $result]);


   return view('recclassview',['recclassview' => $result]);
   
   

   //$class=ClassData::find($id);
   //$class->delete();
   //return redirect()->back()->with('dmessage', 'Deleted Successfully!');
}





public function ssearchrecclass(Request $request){
   //dd($request->all());


   $search=$request->get('search');

   

   $result=recClass::where('sub','like', '%'.$search.'%')
   ->orwhere('grade','like', '%'.$search.'%')
   ->orwhere('duration','like', '%'.$search.'%')
   ->orwhere('handler','like', '%'.$search.'%')->paginate(5);
   //return view('showsearch',['show' => $result]);


   return view('srecview',['recclassview' => $result]);
   
   

   //$class=ClassData::find($id);
   //$class->delete();
   //return redirect()->back()->with('dmessage', 'Deleted Successfully!');
}



}
