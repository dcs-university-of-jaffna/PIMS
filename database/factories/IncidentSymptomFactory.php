<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Incident_Symptom;
use Faker\Generator as Faker;

$factory->define(
    Incident_Symptom::class,
    function (Faker $faker) {
        return [
            'incident_id' => $faker-> numberBetween(1, 100),
            'symptom_id' => $faker->numberBetween(1, 147),
        ];
    }
);
