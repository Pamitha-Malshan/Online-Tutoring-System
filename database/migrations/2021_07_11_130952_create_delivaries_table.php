<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDelivariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dcode');
            $table->string('dname');
            $table->string('studentid');
            $table->string('studentname');
            $table->string('studentaddress');
            $table->string('tute');
            $table->string('isimplement')->default(0);
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
        Schema::dropIfExists('delivaries');
    }
}
