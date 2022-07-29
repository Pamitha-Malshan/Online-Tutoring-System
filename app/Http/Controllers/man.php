<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\delivary;
use App\resources\views\Dman;
class man extends Controller
{
  public function up(Request $request){
      // dd($request);
    $id=$request->id;
    $sd=$request->com;
 
    $data=delivary::find($id);
    $data->iscomplete=$sd;

    $data->save();
    $tasks=delivary::all();

    return view('Dman')->with('dely',$tasks);
  }

}
