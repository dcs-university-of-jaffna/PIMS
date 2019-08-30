
<?php

/**
 * Factory seeding the incidents table
 * PHP version 7.2.19
 *
 * @var      \Illuminate\Database\Eloquent\Factory $factory
 * @category Factory
 * @package  Database/factories
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use App\Incident;
use Faker\Generator as Faker;

$factory->define(
    Incident::class,
    function (Faker $faker) {
        return [
            'patient_id' => $faker-> numberBetween($min = 1, $max = 70),
            'toxicity_id' => $faker-> numberBetween($min = 1, $max = 100),
            'date' => $faker->date('Y-m-d', 'now'),
            'time' => $faker->time('H:i:s', 'now'),
            'area' => $faker->city(),
            'symptom_others' => $faker->realText(120, 2),
            'management_others' => $faker->realText(100, 2),
            'comments' => $faker->realText(50, 2),
            'is_submited' => $faker->randomElement(array('0','1')),
        ];
    }
);

