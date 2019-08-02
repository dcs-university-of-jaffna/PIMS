<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Floras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floras', function (Blueprint $table) {
            $table->bigIncrements('floras_id');
            $table->string('plant_name')->nullable();
            $table->string('plant_part')->nullable();
            $table->integer('amount')->nullable()->unsigned();
            $table->time('ingestion_time')->nullable();
            $table->string('circumstance')->nullable();
            $table->string('poisoning_mode')->nullable();
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
        Schema::drop('floras');
    }
}
