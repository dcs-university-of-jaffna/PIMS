<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Clinicals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clinicals', function (Blueprint $table) {
           
            $table->bigIncrements('Clinicals_Id');
            $table->tinyInteger('Burning_Pain');
            $table->tinyInteger('Pruritus');
            $table->tinyInteger('Vomiting');
            $table->tinyInteger('Bronchospasm');
            $table->tinyInteger('Renal_Failure');
            $table->tinyInteger('Tightness_of_Chest');
            $table->tinyInteger('Urticaria');
            $table->tinyInteger('Laryngeal_Odema');
            $table->tinyInteger('Rhabdomyolysis');
            $table->tinyInteger('Swelling');
            $table->tinyInteger('Nausea');
            $table->tinyInteger('Hypotension');
            $table->tinyInteger('Oliguria');
            $table->tinyInteger('Diarrhoea');
            $table->tinyInteger('Malaise');
            $table->tinyInteger('Facial_Odema');
            $table->tinyInteger('Seizure'); 
            $table->string('Clinicals_Others');
            $table->tinyInteger('Anaphylaxis');
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
        Schema::dropIfExists('Clinicals');
    }
}
