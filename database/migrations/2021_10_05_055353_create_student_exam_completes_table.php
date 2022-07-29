<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentExamCompletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_exam_completes', function (Blueprint $table) {
            $table->id();
            $table->string('classid');
            $table->string('examid');
            $table->string('studentid');
            $table->boolean('isCompleted')->default(0);
            $table->string('feedback');
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
        Schema::dropIfExists('student_exam_completes');
    }
}
