<?php

/**
 * Migration file for creating prescriptions table
 * PHP version 7.2.19
 *
 * @category Prescriptions_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating prescriptions table
 * PHP version 7.2.19
 *
 * You may add fields to prescriptions table here
 *
 * @category Prescriptions_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreatePrescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'prescription',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('incident_id');
                $table->unsignedBigInteger('doctor_id');
                $table->unsignedBigInteger('management_id');
                $table->timestamps();

                $table->foreign('incident_id')
                    ->references('id')->on('incidents')
                    ->onUpdate('cascade');

                $table->foreign('doctor_id')
                    ->references('id')->on('users')
                    ->onUpdate('cascade');

                $table->foreign('management_id')
                    ->references('id')->on('managements')
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
        Schema::dropIfExists('prescription');

    }
}
