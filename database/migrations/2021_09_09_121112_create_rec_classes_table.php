<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rec_classes', function (Blueprint $table) {
            $table->id();
            $table->string('sub');
            $table->string('grade');
            $table->string('duration');
            $table->string('recdate');
            $table->string('handler');
            $table->string('link');
            $table->boolean('isfinished')->default(0);
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
        Schema::dropIfExists('rec_classes');
    }
}
