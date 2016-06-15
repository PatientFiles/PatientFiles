<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabrequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
    {
        Schema::create('Lab_request', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('practitioner_id');
            $table->integer('lab_id');
            $table->string('remarks');
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
        Schema::drop('Lab_request');
    }
}
