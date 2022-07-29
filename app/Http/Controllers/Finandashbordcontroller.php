<?php

namespace App\Http\Controllers;

use App\Models\finandashbord;
use Illuminate\Http\Request;

class Finandashbordcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view ('financial_dashbord');
    }
    

    public function summary()
    {
        return view ('financial_dashbord');
    }



}
