<?php

/**
 * Migration file for creating incident_symptoms table
 * php version 7.2.19
 *
 * @category Incident_Symptoms_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating incident_symptoms table
 * php version 7.2.19
 *
 * You may add fields to incident_symptoms table here
 *
 * @category Incident_Symptoms_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreateIncidentSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'incident_symptoms',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('incident_id');
                $table->unsignedBigInteger('symptom_id');
                $table->timestamps();

                $table->foreign('incident_id')
                    ->references('id')->on('incidents')
                    ->onUpdate('cascade');

                $table->foreign('symptom_id')
                    ->references('id')->on('symptoms')
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
        Schema::dropIfExists('incident_symptoms');
    }
}
