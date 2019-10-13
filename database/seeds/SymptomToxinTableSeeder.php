<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymptomToxinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptom_toxin')->insert(
            [
                ['toxin_id' => 1, 'symptom_id' => 86, 'category' => 'general'],
                ['toxin_id' => 1, 'symptom_id' => 30, 'category' => 'general'],
                ['toxin_id' => 1, 'symptom_id' => 42, 'category' => 'general'],
                ['toxin_id' => 1, 'symptom_id' => 132, 'category' => 'general'],
                ['toxin_id' => 1, 'symptom_id' => 54, 'category' => 'general'],
                ['toxin_id' => 1, 'symptom_id' => 48, 'category' => 'general'],
                ['toxin_id' => 1, 'symptom_id' => 3, 'category' => 'cns effects'],
                ['toxin_id' => 1, 'symptom_id' => 22, 'category' => 'cns effects'],
                ['toxin_id' => 1, 'symptom_id' => 23, 'category' => 'cns effects'],
                ['toxin_id' => 1, 'symptom_id' => 38, 'category' => 'cns effects'],
                ['toxin_id' => 2, 'symptom_id' => 43, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 136, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 37, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 57, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 111, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 113, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 56, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 63, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 39, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 55, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 32, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 25, 'category' => 'general'],
                ['toxin_id' => 2, 'symptom_id' => 51, 'category' => 'general'],
                ['toxin_id' => 3, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 3, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 3, 'symptom_id' => 93, 'category' => 'general'],
                ['toxin_id' => 3, 'symptom_id' => 46, 'category' => 'general'],
                ['toxin_id' => 3, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 3, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 3, 'symptom_id' => 128, 'category' => 'cvs'],
                ['toxin_id' => 3, 'symptom_id' => 129, 'category' => 'cvs'],
                ['toxin_id' => 3, 'symptom_id' => 74, 'category' => 'cvs'],
                ['toxin_id' => 3, 'symptom_id' => 80, 'category' => 'cardiac dysrrhythmias'],
                ['toxin_id' => 3, 'symptom_id' => 352, 'category' => 'cardiac dysrrhythmias'],
                ['toxin_id' => 3, 'symptom_id' => 9, 'category' => 'cardiac dysrrhythmias'],
                ['toxin_id' => 3, 'symptom_id' => 127, 'category' => 'cardiac dysrrhythmias'],
                ['toxin_id' => 3, 'symptom_id' => 143, 'category' => 'cardiac dysrrhythmias'],
                ['toxin_id' => 3, 'symptom_id' => 353, 'category' => 'cardiac dysrrhythmias'],
            ]
        );
    }
}
