<?php

use App\Management;
use App\ManagementGroup;
use App\ManagementManagementGroup;
use App\Symptom;
use App\SymptomToxin;
use App\Toxin;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Management::unguard();
        Symptom::unguard();
        Toxin::unguard();
        ManagementGroup::unguard();
        ManagementManagementGroup::unguard();
        SymptomToxin::unguard();

        $this->call(ManagementsTableSeeder::class);
        $this->call(SymptomsTableSeeder::class);
        $this->call(ToxinsTableSeeder::class);
        $this->call(ManagementGroupsTableSeeder::class);
        $this->call(ManagementManagementGroupTableSeeder::class);
        $this->call(SymptomToxinTableSeeder::class);

        Management::reguard();
        Symptom::reguard();
        Toxin::reguard();
        ManagementGroup::reguard();
        ManagementManagementGroup::reguard();
        SymptomToxin::reguard();

    }
}
