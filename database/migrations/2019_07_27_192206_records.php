<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Records extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Records', function (Blueprint $table) {
           
            $table->bigIncrements('Records_Id');
            $table->bigInteger('Doctor_ID');
            $table->integer('PHN');
            $table->bigInteger('Clinical_Id');
            $table->bigInteger('Management_Id');
            $table->string('Toxicity_Type');
            $table->bigInteger('Toxicity_Id');
            $table->bigInteger('Site_Id');
            $table->string('Instance_Area');
            $table->date('Instance_Date');
            $table->tinyInteger('Editable');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Records');
    }
}
