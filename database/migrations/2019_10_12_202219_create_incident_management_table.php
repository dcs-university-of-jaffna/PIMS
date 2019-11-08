<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incident_management', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('incident_id');
            $table->unsignedBigInteger('management_id');
            $table->timestamps();

            $table->foreign('incident_id')
                ->references('id')->on('incidents')
                ->onUpdate('cascade');

            $table->foreign('management_id')
                ->references('id')->on('managements')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incident_management');
    }
}
