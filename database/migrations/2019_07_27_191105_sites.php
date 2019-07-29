<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->bigIncrements('sites_id');
            $table->boolean('head_neck')->default(0);
            $table->boolean('upper_limb')->default(0);
            $table->boolean('chest')->default(0);
            $table->boolean('lower_limb')->default(0);
            $table->boolean('abdomen')->default(0);
            $table->string('sites_others')->nullable();
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
        Schema::dropIfExists('sites');
    }
}
