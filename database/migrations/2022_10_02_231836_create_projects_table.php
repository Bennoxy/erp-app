<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_title');
            $table->string('description');
            $table->string('client_id');
            $table->string('employee_id');
            $table->string('subcontractor_id')->nullable();
            $table->string('freelancer_id')->nullable();
            $table->string('start_date');
            $table->string('due_date');
            $table->string('project_amount');
            $table->string('project_bill');
            $table->string('status');
            $table->string('progress');
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
        Schema::dropIfExists('projects');
    }
}
