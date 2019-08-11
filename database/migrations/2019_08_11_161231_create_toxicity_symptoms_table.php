<?php

/**
 * Class for creating toxicity_symptoms table
 * php version 7.2.19
 *
 * You may add fields to toxicity_symptoms table here
 *
 * @category Toxicity_Symptoms_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating toxicity_symptoms table
 * php version 7.2.19
 *
 * You may add fields to toxicity_symptoms table here
 *
 * @category Toxicity_Symptoms_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreateToxicitySymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'toxicity_symptoms',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('patient_id');
                $table->unsignedBigInteger('toxicity_id');
                $table->timestamps();

                $table->foreign('toxicity_id')
                    ->references('id')->on('toxicities')
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
        Schema::dropIfExists('toxicity_symptoms');
    }
}
