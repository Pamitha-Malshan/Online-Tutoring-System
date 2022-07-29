<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMcqQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcq_questions', function (Blueprint $table) {
            $table->id();
            $table->integer('examid');
            $table->integer('questionNo');
            $table->string('question');
            $table->string('answer01');
            $table->string('answer02');
            $table->string('answer03');
            $table->string('answer04');
            $table->integer('correctAnswer');
            $table->integer('allocateMark');
            $table->boolean('isAdd')->default(0);
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
        Schema::dropIfExists('mcq_questions');
    }
}
