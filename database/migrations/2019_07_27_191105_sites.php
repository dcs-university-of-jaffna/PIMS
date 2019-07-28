<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sites', function (Blueprint $table) {
           
            $table->bigIncrements('Sites_Id');
            $table->tinyInteger('Head_Neck');
            $table->tinyInteger('Upper_Limb');
            $table->tinyInteger('Chest');
            $table->tinyInteger('Lower_Limb');
            $table->tinyInteger('Sites_Others');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sites');
    }
}
