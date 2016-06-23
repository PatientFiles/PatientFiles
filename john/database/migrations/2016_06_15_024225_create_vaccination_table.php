<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaccinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        Schema::create('Vaccination', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->string('patient_name');
            $table->integer('practitioner_id');
            $table->integer('vaccine_id');
            $table->date('date');
            $table->integer('appointment_id');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Vaccination');
    }
}
