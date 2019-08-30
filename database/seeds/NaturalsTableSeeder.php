<?php

/**
 * Seeder for naturals table
 *
 * PHP version 7.2.19
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use Illuminate\Database\Seeder;

/**
 * Seeder class for naturals table
 *
 * PHP version 7.2.19
 *
 * Use this seeder to seed naturals table
 *
 *           **** Using NaturalFactory ****
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */
class NaturalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Natural::class, 50)->states('floras')->create();
        factory(App\Natural::class, 30)->states('faunas')->create();
        factory(App\Natural::class, 15)->states('microbials')->create();
        factory(App\Natural::class, 5)->states('fungals')->create();

    }
}
