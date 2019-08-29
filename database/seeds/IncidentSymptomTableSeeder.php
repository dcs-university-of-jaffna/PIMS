<?php

/**
 * Seeder for incident_symptom table
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
 * Seeder class for incident_symptom table
 *
 * PHP version 7.2.19
 *
 * Use this seeder to seed incident_symptom table
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class IncidentSymptomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\IncidentSymptom::class, 800)->create();
    }
}
