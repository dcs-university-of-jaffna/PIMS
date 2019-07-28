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
    Schema::create('bee_stings', function (Blueprint $table) {
        $table->bigIncrements('bee_stings_id');
        $table->tinyInteger('number_of_stings')->nullable()->unsigned();
        $table->string('place_of_sting')->nullable();
        $table->string('other_places')->nullable();
        $table->time('sting_time')->nullable();
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
        Schema::dropIfExists('bee_stings');
    }
}
