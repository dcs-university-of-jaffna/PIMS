<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\IncidentSymptom;
use Faker\Generator as Faker;

$factory->define(
    IncidentSymptom::class,
    function (Faker $faker) {
        return [
            'incident_id' => $faker-> numberBetween(1, 100),
            'symptom_id' => $faker->numberBetween(1, 147),
        ];
    }
);
