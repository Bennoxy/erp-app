<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bill_id')->constrained();
            $table->string('item_description');
            $table->string('part_no');
            $table->string('uom');
            $table->integer('quantity');
            $table->integer('unit_price');
            $table->integer('amount');
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
        Schema::dropIfExists('details_bills');
    }
}
