<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Managements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Managements', function (Blueprint $table) {

            $table->bigIncrements('Managements_Id');
            $table->tinyInteger('Ice_packs');
            $table->tinyInteger('Antihistamine');
            $table->tinyInteger('Adrenaline');
            $table->tinyInteger('ICU_Care');
            $table->tinyInteger('Steroids');
            $table->tinyInteger('Renal_Rep_Theraphy');
            $table->tinyInteger('Invasive_Ventilation');
            $table->tinyInteger('Stinger_Scrapped');
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
        Schema::dropIfExists('Managements');
    }
}
