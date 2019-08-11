<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Faunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('faunas', function (Blueprint $table) {
        $table->bigIncrements('faunas_id');
        $table->string('fauna_type')->nullable();
        $table->tinyInteger('number_of_incidents')->nullable()->unsigned();
        $table->string('place_of_incident')->nullable();
        $table->string('other_places')->nullable();
        $table->time('incident_time')->nullable();
        $table->string('cirmustance')->nullable();
        $table->string('comments')->nullable();
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
        Schema::dropIfExists('faunas');
    }
}
