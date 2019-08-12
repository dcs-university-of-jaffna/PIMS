<?php

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
        Model::unguard();

        $this->call(ManagementsTableSeeder::class);
        $this->call(SymptomsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(ToxicityTableSeeder::class);
        $this->call(IncidentsTableSeeder::class);
        $this->call(IncidentSymptomTableSeeder::class);
        $this->call(PrescriptionsTableSeeder::class);


        Model::reguard();
    }
}
