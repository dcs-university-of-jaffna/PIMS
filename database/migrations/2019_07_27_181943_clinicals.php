<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

class Clinicals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicals', function (Blueprint $table) {
            $table->bigIncrements('clinicals_id');
            $table->boolean('burning_pain')->default(0);
            $table->boolean('pruritus')->default(0);
            $table->boolean('vomiting')->default(0);
            $table->boolean('bronchospasm')->default(0);
            $table->boolean('renal_failure')->default(0);
            $table->boolean('tightness_of_chest')->default(0);
            $table->boolean('urticaria')->default(0);
            $table->boolean('laryngeal_odema')->default(0);
            $table->boolean('rhabdomyolysis')->default(0);
            $table->boolean('swelling')->default(0);
            $table->boolean('nausea')->default(0);
            $table->boolean('hypotension')->default(0);
            $table->boolean('oliguria')->default(0);
            $table->boolean('diarrhoea')->default(0);
            $table->boolean('malaise')->default(0);
            $table->boolean('facial_odema')->default(0);
            $table->boolean('seizure')->default(0);
            $table->boolean('anaphylaxis')->default(0);
            $table->string('clinicals_others')->nullable();
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
        Schema::dropIfExists('clinicals');
    }
}
