<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoctorRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //doctor_record schema
        Schema::create('doctor_records', function (Blueprint $table) {
            $table->bigInteger('records_id')->unsigned();
            $table->bigInteger('doctors_id')->unsigned();
            $table->string('comments')->nullable();
            $table->timestamps();
            $table->foreign('records_id')->references('records_id')->on('records')->onUpdate('cascade');
            $table->foreign('doctors_id')->references('id')->on('users')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor_records');
    }
}
