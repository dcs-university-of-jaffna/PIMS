<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BeeStings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('Bee_Stings', function (Blueprint $table) {
        $table->bigIncrements('Bee_Stings_Id');
        $table->tinyInteger('Number_of_Stings');
        $table->string('Place_of_Sting');
        $table->time('Sting_Time');
        $table->tinyInteger('Cirmustance');
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
        Schema::dropIfExists('Bee_Stings');
    }
}
