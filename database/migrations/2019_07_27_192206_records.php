<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Records extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {

            $table->bigIncrements('records_id');
            $table->integer('phn');
            $table->bigInteger('clinicals_id')->nullable()->unsigned();
            $table->bigInteger('managements_id')->nullable()->unsigned();
            $table->string('toxicity_type')->nullable();
            $table->bigInteger('toxicity_id')->nullable()->unsigned();
            $table->bigInteger('sites_id')->nullable()->unsigned();
            $table->string('instance_area')->nullable();
            $table->date('instance_date')->nullable();
            $table->boolean('is_submited')->default(0);
            $table->timestamps();
            $table->foreign('clinicals_id')->references('clinicals_id')->on('clinicals');
            $table->foreign('managements_id')->references('managements_id')->on('managements');
            $table->foreign('sites_id')->references('sites_id')->on('sites');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records');
    }
}
