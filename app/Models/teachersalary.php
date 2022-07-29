<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teachersalary extends Model
{
    use HasFactory;
    protected $table ='teacher_salary';
    protected $fillable=[
    'teachid','teachname','nic','subject','salarymonth','subscribe','amount',
    ];
}
