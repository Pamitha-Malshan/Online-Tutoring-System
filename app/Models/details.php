<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class details extends Model
{
    use HasFactory;

    protected $table ='student_payment_info'; 



    public static function gettotal()
    {
      
       return DB::table('student_payment_info')->sum('totfee');
          
         

    }
     
   
    
   
}
