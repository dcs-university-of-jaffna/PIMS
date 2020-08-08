<?php

/**
 * Migration file for creating incidents table
 */
 
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.    
     */
    public function up()
    {
        Schema::create(
            'incidents',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('patient_id');
                $table->unsignedBigInteger('toxicity_id');
                $table->date('date')->nullable();
                $table->time('time')->nullable();
                $table->string('area')->nullable();
                $table->text('symptom_others')->nullable();
                $table->text('management_others')->nullable();
                $table->text('comments')->nullable();
                $table->boolean('is_submited')->default(0);
                $table->timestamps();

                $table->foreign('patient_id')
                    ->references('id')->on('patients')
                    ->onUpdate('cascade');

                $table->foreign('toxicity_id')
                    ->references('id')->on('toxicities')
                    ->onUpdate('cascade');
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidents');
    }
}

