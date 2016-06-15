<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Prescription', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('medicine_id');
            $table->integer('practitioner_id');
            $table->integer('quantity');
            $table->string('sig');
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
        Schema::drop('Prescription');
    }
}
