<?php


/**
 * Factory seeding the naturals table
 *
 * PHP version 7.2.19
 *
 * @var      \Illuminate\Database\Eloquent\Factory $factory
 * @category Factory
 * @package  Database/factories
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use App\Natural;
use Faker\Generator as Faker;

$factory->define(
    Natural::class,
    function (Faker $faker) {
        return [

            'natural_type' => 'floras',
        ];
    }
);
