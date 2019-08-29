
<?php
/**
 * Factory seeding the faunas table
 * PHP version 7.2.19
 *
 * @var      \Illuminate\Database\Eloquent\Factory $factory
 * @category Factory
 * @package  Database/factories
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */
use App\Fauna;
use Faker\Generator as Faker;

$factory->define(
    Fauna::class,
    function (Faker $faker) {
        return [
            'id' => $faker-> unique()-> numberBetween($min = 51, $max = 80),
            'number_of_stings' => $faker-> numberBetween($min = 1, $max = 20),
            'place_of_sting' => $faker-> randomElement(array('indoor', 'garden', 'paddyfield', 'road', 'forest', 'unutilized land', 'other')),
            'sting_site' => $faker-> randomElement(array('head&neck', 'upperlimb', 'leg', 'foot&ankle', 'abdomen', 'other')),
            'circumstance' => $faker-> randomElement(array('provoked', 'unprovoked')),
            'comments' => $faker->userName,
        ];
    }
);

