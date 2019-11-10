<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagementManagementGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_management_group', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('management_group_id');
            $table->unsignedBigInteger('management_id');
            $table->string('category')->nullable();
            $table->timestamps();

            $table->foreign('management_id')
                ->references('id')->on('managements')
                ->onUpdate('cascade');

            $table->foreign('management_group_id')
                ->references('id')->on('management_groups')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_management_group');
    }
}
