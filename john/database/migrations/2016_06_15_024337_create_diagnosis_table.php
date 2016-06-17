<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Diagnosis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('practitioner_id');
            $table->string('diagnosis_result');
            $table->string('diagnosis_remarks');
            $table->integer('appointment_id');
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
        Schema::drop('Diagnosis');
    }
}
