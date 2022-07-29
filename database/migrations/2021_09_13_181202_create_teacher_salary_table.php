<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherSalaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_salary', function (Blueprint $table) {
            $table->id();
            $table->string('teachid');
            $table->string('teachname');
            $table->string('nic');
            $table->string('subject');
            $table->string('salarymonth');
            $table->string('subscribe');
            $table->string('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_salary');
    }
}
