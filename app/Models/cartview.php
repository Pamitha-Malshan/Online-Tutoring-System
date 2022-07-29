<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class cartview extends Model
{
    use HasFactory;
    protected $table ='subject_cartview';
    protected $fillable=[
    'studentid','subjectid','name','fees'
    ];


    public static function getsum()
    {
        //return $query->sum('fees');

        return DB::table('subject_cartview')->sum('fees');
          
         

    }
    
}
