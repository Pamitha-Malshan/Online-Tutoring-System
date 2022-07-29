<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPaymetInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_payment_info', function (Blueprint $table) {
            $table->id();
            $table->string('stuid');
            $table->string('stuname');
            $table->string('grade');
            $table->string('subid');
            $table->string('month');
            $table->string('totfee');
            $table->string('bank');
            $table->string('branch');
            $table->string('date');
            $table->string('slipimage')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('student_payment_info');
    }
}
