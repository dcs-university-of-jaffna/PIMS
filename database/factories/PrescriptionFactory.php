
<?php


/**
 * Factory seeding the prescription table
 * PHP version 7.2.19
 *
 * @var      \Illuminate\Database\Eloquent\Factory $factory
 * @category Factory
 * @package  Database/factories
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */


use App\Prescription;
use Faker\Generator as Faker;

$factory->define(
    Prescription::class,
    function (Faker $faker) {
        return [
            'incident_id' => $faker-> numberBetween($min = 1, $max = 100),
            'doctor_id' => $faker-> numberBetween($min = 1, $max = 20),
            'management_id' => $faker-> numberBetween($min = 1, $max = 29),
        ];
    }
);
