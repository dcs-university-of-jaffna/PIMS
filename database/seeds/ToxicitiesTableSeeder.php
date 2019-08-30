<?php

/**
 * Seeder for toxicities table
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
 * Seeder class for toxicities table
 *
 * PHP version 7.2.19
 *
 * Use this seeder to seed toxicities table
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class ToxicitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Toxicity::class, 50)->states('naturals', 'floras')->create();
        factory(App\Toxicity::class, 30)->states('naturals', 'faunas')->create();
        factory(App\Toxicity::class, 15)->states('naturals', 'microbials')->create();
        factory(App\Toxicity::class, 5)->states('naturals', 'fungals')->create();
    }
}
