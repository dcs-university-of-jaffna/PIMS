<?php

/**
 * Main Seeder file seeding tables
 *
 * PHP version 7.2.19
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

use App\Fauna;
use App\Flora;
use App\Management;
use App\Incident;
use App\IncidentSymptom;
use App\Natural;
use App\Patient;
use App\Prescription;
use App\Symptom;
use App\Toxicity;
use App\User;
use Illuminate\Database\Seeder;

/**
 * Seeder class, seeding all the tables
 *
 * PHP version 7.2.19
 *
 * Use this seeder to seed prescription table
 *
 *           **** Run any other seeders through this class ****
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Management::unguard();
        Symptom::unguard();
        User::unguard();
        Patient::unguard();
        Incident::unguard();
        IncidentSymptom::unguard();
        Prescription::unguard();
        Toxicity::unguard();
        Natural::unguard();
        Flora::unguard();
        Fauna::unguard();

        $this->call(ManagementsTableSeeder::class);
        $this->call(SymptomsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(ToxicitiesTableSeeder::class);
        $this->call(NaturalsTableSeeder::class);
        $this->call(FlorasTableSeeder::class);
        $this->call(FaunasTableSeeder::class);
        $this->call(IncidentsTableSeeder::class);
        $this->call(IncidentSymptomTableSeeder::class);
        $this->call(PrescriptionTableSeeder::class);

        Management::reguard();
        Symptom::reguard();
        User::reguard();
        Patient::reguard();
        Incident::reguard();
        IncidentSymptom::reguard();
        Prescription::reguard();
        Toxicity::reguard();
        Natural::reguard();
        Flora::reguard();
        Fauna::reguard();

    }
}
