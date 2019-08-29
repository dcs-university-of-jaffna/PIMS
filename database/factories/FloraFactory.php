
<?php

/**
 * Factory seeding the floras table
 * PHP version 7.2.19
 *
 * @var      \Illuminate\Database\Eloquent\Factory $factory
 * @category Factory
 * @package  Database/factories
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */
use App\Flora;
use Faker\Generator as Faker;

$factory->define(
    Flora::class,
    function (Faker $faker) {
        return [
            'plant_part' => $faker-> randomElement(array('leaf', 'branch', 'root', 'flover', 'fruit', 'cover')),
            'amount' => $faker->numberBetween($min = 1, $max = 100),
            'circumstance' => $faker->randomElement(array('accidental', 'suicidal', 'homocidal', 'occupational')),
            'poisoning_mode' => $faker->randomElement(array('contact', 'ingestion', 'inhalation', 'other')),
            'antidote' => $faker->userName,
            'activated_chracol_doses' => $faker->numberBetween($min = 1, $max = 100),
        ];
    }
);

