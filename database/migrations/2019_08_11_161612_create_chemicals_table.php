
<?php

/**
 * Migration file for creating chemicals table
 *
 * PHP version 7.2.19
 *
 * @category Chemicals_Migration
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating chemicals table
 *
 * PHP version 7.2.19
 *
 * You may add fields to chemicals table here
 *
 * @category Chemicals_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */
class CreateChemicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'chemicals',
            function ( Blueprint $table ) {
                $table->bigIncrements('id');
                $table->string('sub_group');
                $table->unsignedInteger('amount');
                $table->string('poisoning_mode');
                $table->string('circumstance');
                $table->timestamps();

                $table->foreign('id')
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
        Schema::dropIfExists('chemicals');
    }
}
