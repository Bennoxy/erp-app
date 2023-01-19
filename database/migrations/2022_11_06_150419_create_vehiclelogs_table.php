<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiclelogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model');
            $table->string('plate_no');
            $table->string('destination');
            $table->date('date');
            $table->string('time_out');
            $table->string('time_in')->nullable();
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
        Schema::dropIfExists('vehiclelogs');
    }
}
