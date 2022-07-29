<?php

namespace App\Http\Controllers;

use App\Models\cartview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Cartviewcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = cartview::get();
        $sum =cartview::getsum();
       return view('subject_cartview')->with(compact('cart','sum')) ;//
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_subject') ;//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'subjectid' =>'required',
            'name' =>'required',
            'fees' =>'required',
        ]);

        cartview::create($request->all());

      return redirect()->route("cartview.index")->with('message','Your Subject is Successfully added ');
       
    }

  //    destroy resource in storage.

    public function destroy(cartview $cartview)
    {
         $cartview ->delete();

         return redirect()->route("cartview.index")->with('message','Your Subject is Successfully deleted ');
    } 

        
      
   
}
