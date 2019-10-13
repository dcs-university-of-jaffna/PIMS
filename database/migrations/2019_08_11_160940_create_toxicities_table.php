
<?php

/**
 * Migration file for creating toxicities table
 * PHP version 7.2.19
 *
 * @category Toxicities_Migration
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating toxicities table
 * PHP version 7.2.19
 *
 * You may add fields to toxicities table here
 *
 * @category Toxicities_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreateToxicitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'toxicities',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('main_group');
                $table->string('sub_group');
                $table->unsignedBigInteger('toxin_id');
                $table->unsignedBigInteger('management_group_id');
                $table->timestamps();

                $table->foreign('management_group_id')
                    ->references('id')->on('management_groups')
                    ->onUpdate('cascade');

                $table->foreign('toxin_id')
                    ->references('id')->on('toxins')
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
        Schema::dropIfExists('toxicities');
    }
}

