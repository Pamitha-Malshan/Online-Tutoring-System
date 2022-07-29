<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_data', function (Blueprint $table) {
            $table->id();
            $table->string('cid');
            $table->string('sid');
            $table->string('date');
            $table->string('time');
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
        Schema::dropIfExists('class_data');
    }
}
