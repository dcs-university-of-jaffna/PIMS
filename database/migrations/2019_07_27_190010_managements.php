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
        Schema::create('managements', function (Blueprint $table) {
            $table->bigIncrements('managements_id');
            $table->boolean('ice_packs')->default(0);
            $table->boolean('antihistamine')->default(0);
            $table->boolean('adrenaline')->default(0);
            $table->boolean('icu_care')->default(0);
            $table->boolean('steroids')->default(0);
            $table->boolean('renal_rep_theraphy')->default(0);
            $table->boolean('invasive_ventilation')->default(0);
            $table->boolean('stinger_scrapped')->default(0);
            $table->string('managements_others')->nullable();
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
        Schema::dropIfExists('managements');
    }
}
