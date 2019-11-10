<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSymptomToxinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptom_toxin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('toxin_id');
            $table->unsignedBigInteger('symptom_id');
            $table->string('category')->nullable();
            $table->timestamps();

            $table->foreign('symptom_id')
                ->references('id')->on('symptoms')
                ->onUpdate('cascade');

            $table->foreign('toxin_id')
                ->references('id')->on('toxins')
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
        Schema::dropIfExists('symptom_toxin');
    }
}
