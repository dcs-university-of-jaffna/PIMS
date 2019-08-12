<?php

use App\Management;
use App\Incident;
use App\IncidentSymptom;
use App\Patient;
use App\Prescription;
use App\Symptom;
use App\Toxicity;
use App\User;
use Illuminate\Database\Seeder;

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
        Toxicity::unguard();
        Incident::unguard();
        IncidentSymptom::unguard();
        Prescription::unguard();

        $this->call(ManagementsTableSeeder::class);
        $this->call(SymptomsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(ToxicityTableSeeder::class);
        $this->call(IncidentsTableSeeder::class);
        $this->call(IncidentSymptomTableSeeder::class);
        $this->call(PrescriptionTableSeeder::class);


        Management::reguard();
        Symptom::reguard();
        User::reguard();
        Patient::reguard();
        Toxicity::reguard();
        Incident::reguard();
        IncidentSymptom::reguard();
        Prescription::reguard();

    }
}
