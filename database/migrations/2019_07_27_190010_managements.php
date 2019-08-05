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
            $table->integer('activated_chracol_doeses')->default(0);
            $table->boolean('adrenaline')->default(0);
            $table->boolean('alkalinization')->default(0);
            $table->boolean('analgesics_given')->default(0);
            $table->boolean('antibiotics_given')->default(0);
            $table->boolean('anticonvulsants_given')->default(0);
            $table->string('antidote_type')->nullable();
            $table->boolean('antihistamine')->default(0);
            $table->boolean('antropine_given')->default(0);
            $table->boolean('blood_transfusion')->default(0);
            $table->boolean('calcium_gluconate_given')->default(0);
            $table->boolean('corticosteroids')->default(0);
            $table->boolean('dialysis')->default(0);
            $table->boolean('dopamine')->default(0);
            $table->boolean('gastric_aspiration')->default(0);
            $table->boolean('gastric_lavage')->default(0);
            $table->boolean('ice_packs')->default(0);
            $table->boolean('icu_care')->default(0);
            $table->boolean('invasive_ventilation')->default(0);
            $table->boolean('methylprednisalone')->default(0);
            $table->boolean('nacl_given')->default(0);
            $table->boolean('nahco3_given')->default(0);
            $table->boolean('plasma_expanders')->default(0);
            $table->boolean('prednisalone_given')->default(0);
            $table->boolean('renal_rep_theraphy')->default(0);
            $table->boolean('resuscitation')->default(0);
            $table->boolean('steroids')->default(0);
            $table->boolean('stinger_scrapped')->default(0);
            $table->boolean('supportive_therapy')->default(0);
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
