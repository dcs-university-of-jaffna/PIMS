<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Prescription;
use Faker\Generator as Faker;

$factory->define(
    Prescription::class,
    function (Faker $faker) {
        return [
            'incident_id' => $faker-> numberBetween(1, 100),
            'doctor_id' => $faker-> numberBetween(1, 20),
            'management_id' => $faker-> numberBetween(1, 29),
        ];
    }
);
