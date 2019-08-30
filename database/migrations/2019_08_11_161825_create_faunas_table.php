
<?php

/**
 * Class for creating fauna table
 * PHP version 7.2.19
 *
 * @category Fauna_Migration
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating fauna table
 * PHP version 7.2.19
 *
 * You may add fields to fauna table here
 *
 * @category Fauna_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreateFaunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'faunas',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->tinyInteger('number_of_stings')->nullable()->unsigned();
                $table->string('place_of_sting')->nullable();
                $table->string('sting_site')->nullable();
                $table->string('circumstance')->nullable();
                $table->string('comments')->nullable();
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
        Schema::dropIfExists('faunas');
    }
}

