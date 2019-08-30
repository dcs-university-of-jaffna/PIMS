
<?php
/**
 * Migration file for creating naturals table
 *
 * PHP version 7.2.19
 *
 * @category Naturals_Migration
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class for creating naturals table
 *
 * PHP version 7.2.19
 *
 * You may add fields to naturals table here
 *
 * @category Naturals_Migration_Class
 * @package  Migrations
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class CreateNaturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'naturals',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('natural_type')->nullable();
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
        Schema::dropIfExists('naturals');
    }
}
