
<?php

/**
 * Migration file for creating incidents table
 *
 * PHP version 7.2.19
 *
 * You may add fields to incidents table here
 *
 * @category Incidents_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating incidents table
 *
 * PHP version 7.2.19
 *
 * You may add fields to incidents table here
 *
 * @category Incidents_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
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

