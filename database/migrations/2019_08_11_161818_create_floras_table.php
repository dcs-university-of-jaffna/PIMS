
<?php

/**
 * Migration file for creating flora table
 * PHP version 7.2.19
 *
 * @category Flora_Migration
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating flora table
 * PHP version 7.2.19
 *
 * You may add fields to flora table here
 *
 * @category Folra_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreateFlorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'floras',
            function ( Blueprint $table ) {
                $table->bigIncrements('id');
                $table->string('plant_part')->nullable();
                $table->unsignedInteger('amount')->nullable();
                $table->string('circumstance')->nullable();
                $table->string('poisoning_mode')->nullable();
                $table->string('antidote')->nullable();
                $table->unsignedInteger('activated_chracol_doses')->nullable();
                $table->timestamps();

                $table->foreign('id')
                    ->references('id')->on('naturals')
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
        Schema::dropIfExists('floras');
    }
}

