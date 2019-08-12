<?php

  /**
   * Factory seeding the patients table
   * php version 7.2.19
   *
   * @var      \Illuminate\Database\Eloquent\Factory $factory
   * @category Factory
   * @package  Database/factories
   * @author   Group7s <dcs@jfn.ac.lk>
   * @license  GNU General Public License (GPL)
   * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
   */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(
    Patient::class,
    function (Faker $faker) {
        return [
            'phn' => $faker->numerify('###########'),
            'name' => $faker->name,
            'nic' => $faker->unique()->numerify('9########V'),
        ];
    }
);
