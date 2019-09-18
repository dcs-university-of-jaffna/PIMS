
<?php
/**
 * File for creating patients table
 * PHP version 7.2.19
 *
 * @category Patients_Migration
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating patients table
 * PHP version 7.2.19
 *
 * You may add fields to patients table here
 *
 * @category Patients_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'patients',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('phn');
                $table->string('name')->nullable();
                $table->string('nic')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('patients');
    }
}

