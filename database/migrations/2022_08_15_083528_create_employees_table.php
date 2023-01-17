<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->foreignId('department_id')->constrained();
            $table->string('address');
            $table->date('employment_Year');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->string('state_of_Origin');
            $table->string('local_Government');
            $table->string('marital_Status');
            $table->string('no_of_Children');
            $table->date('date_of_Birth');
            $table->string('nOK_Name');
            $table->string('nOK_Phone');
            $table->string('nOK_Address');
            $table->string('nOK_Relationship');
            $table->string('highest_Qualification');
            $table->string('institution');
            $table->string('professional_Qualification');
            $table->string('ambition');
            $table->string('blood_Group');
            $table->string('genotype');
            $table->string('allergies');
            $table->string('hobbies');
            $table->string('language_Proficiency');
            $table->string('personal_Core_Values');
            $table->string('image');
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
        Schema::dropIfExists('employees');
    }
}
