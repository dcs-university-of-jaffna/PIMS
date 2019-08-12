<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Incident;
use Faker\Generator as Faker;

$factory->define(
    Incident::class,
    function (Faker $faker) {
        return [
            'patient_id' => $faker-> numberBetween(1, 50),
            'toxicity_id' => $faker->numberBetween(1, 45),
            'date' => $faker->date('Y-m-d', 'now'),
            'time' => $faker->time('H:i:s', 'now'),
            'is_submited' => $faker->randomElement(array('0','1')),
        ];
    }
);
