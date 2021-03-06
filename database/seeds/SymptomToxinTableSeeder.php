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
                ['toxin_id' => 4, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 2, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 5, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 25, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 28, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 31, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 46, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 60, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 66, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 73, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 119, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 126, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 4, 'symptom_id' => 54, 'category' => 'inhalation'],
                ['toxin_id' => 4, 'symptom_id' => 77, 'category' => 'inhalation'],
                ['toxin_id' => 4, 'symptom_id' => 113, 'category' => 'inhalation'],
                ['toxin_id' => 4, 'symptom_id' => 116, 'category' => 'inhalation'],
                ['toxin_id' => 4, 'symptom_id' => 146, 'category' => 'inhalation'],
                ['toxin_id' => 5, 'symptom_id' => 15, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 28, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 29, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 37, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 49, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 69, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 71, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 84, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 85, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 88, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 99, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 102, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 104, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 112, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 114, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 117, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 121, 'category' => 'general'],
                ['toxin_id' => 5, 'symptom_id' => 123, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 6, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 8, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 12, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 13, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 16, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 25, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 44, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 61, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 78, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 90, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 91, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 98, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 100, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 101, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 109, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 114, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 138, 'category' => 'general'],
                ['toxin_id' => 6, 'symptom_id' => 19, 'category' => 'hypocalcemia'],
                ['toxin_id' => 6, 'symptom_id' => 85, 'category' => 'hypocalcemia'],
                ['toxin_id' => 6, 'symptom_id' => 139, 'category' => 'hypocalcemia'],
                ['toxin_id' => 6, 'symptom_id' => 93, 'category' => 'oedema'],
                ['toxin_id' => 6, 'symptom_id' => 94, 'category' => 'oedema'],
                ['toxin_id' => 6, 'symptom_id' => 95, 'category' => 'oedema'],
                ['toxin_id' => 6, 'symptom_id' => 96, 'category' => 'oedema'],
                ['toxin_id' => 6, 'symptom_id' => 11, 'category' => 'eye contact'],
                ['toxin_id' => 6, 'symptom_id' => 24, 'category' => 'eye contact'],
                ['toxin_id' => 6, 'symptom_id' => 26, 'category' => 'eye contact'],
                ['toxin_id' => 6, 'symptom_id' => 52, 'category' => 'eye contact'],
                ['toxin_id' => 6, 'symptom_id' => 79, 'category' => 'eye contact'],
                ['toxin_id' => 6, 'symptom_id' => 106, 'category' => 'eye contact'],
                ['toxin_id' => 6, 'symptom_id' => 145, 'category' => 'eye contact'],
                ['toxin_id' => 7, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 40, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 37, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 54, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 70, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 92, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 87, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 105, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 118, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 120, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 122, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 134, 'category' => 'general'],
                ['toxin_id' => 7, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 7, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 13, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 17, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 21, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 25, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 46, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 74, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 118, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 135, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 141, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 142, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 147, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 8, 'symptom_id' => 352, 'category' => 'hb'],
                ['toxin_id' => 8, 'symptom_id' => 353, 'category' => 'hb'],
                ['toxin_id' => 8, 'symptom_id' => 399, 'category' => 'hb'],
                ['toxin_id' => 9, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 349, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 20, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 31, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 41, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 45, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 62, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 68, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 74, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 107, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 124, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 130, 'category' => 'general'],
                ['toxin_id' => 9, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 2, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 4, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 10, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 18, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 21, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 23, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 25, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 31, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 46, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 58, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 65, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 74, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 72, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 75, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 84, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 108, 'category' => 'general'],
                ['toxin_id' => 10, 'symptom_id' => 115, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 2, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 25, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 33, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 41, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 59, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 67, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 73, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 76, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 83, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 103, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 119, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 135, 'category' => 'general'],
                ['toxin_id' => 11, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 14, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 165, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 53, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 74, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 81, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 82, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 98, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 110, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 114, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 121, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 259, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 166, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 131, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 137, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 140, 'category' => 'general'],
                ['toxin_id' => 13, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 101, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 167, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 54, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 168, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 169, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 170, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 114, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 171, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 172, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 146, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 130, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 124, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 173, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 174, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 118, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 157, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 175, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 176, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 163, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 131, 'category' => 'general'],
                ['toxin_id' => 14, 'symptom_id' => 140, 'category' => 'general'],
                ['toxin_id' => 16, 'symptom_id' => 101, 'category' => 'general'],
                ['toxin_id' => 16, 'symptom_id' => 131, 'category' => 'general'],
                ['toxin_id' => 16, 'symptom_id' => 177, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 178, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 165, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 179, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 180, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 181, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 182, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 183, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 74, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 172, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 185, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 186, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 187, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 188, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 189, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 192, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 193, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 54, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 34, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 29, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 197, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 125, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 21, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 113, 'category' => 'general'],
                ['toxin_id' => 17, 'symptom_id' => 18, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 130, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 47, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 360, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 132, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 363, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 300, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 364, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 17, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 349, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 365, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 366, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 41, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 163, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 21, 'category' => 'general'],
                ['toxin_id' => 20, 'symptom_id' => 117, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 17, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 44, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 89, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 59, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 367, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 370, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 371, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 372, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 337, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 373, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 375, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 125, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 376, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 377, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 378, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 359, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 117, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 380, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 381, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 382, 'category' => 'general'],
                ['toxin_id' => 15, 'symptom_id' => 563, 'category' => 'general'],
                ['toxin_id' => 18, 'symptom_id' => 165, 'category' => 'general'],
                ['toxin_id' => 18, 'symptom_id' => 131, 'category' => 'general'],
                ['toxin_id' => 18, 'symptom_id' => 355, 'category' => 'general'],
                ['toxin_id' => 18, 'symptom_id' => 207, 'category' => 'general'],
                ['toxin_id' => 18, 'symptom_id' => 5, 'category' => 'general'],
                ['toxin_id' => 19, 'symptom_id' => 144, 'category' => 'general'],
                ['toxin_id' => 19, 'symptom_id' => 1, 'category' => 'general'],
                ['toxin_id' => 19, 'symptom_id' => 74, 'category' => 'general'],
                ['toxin_id' => 19, 'symptom_id' => 101, 'category' => 'general'],
                ['toxin_id' => 19, 'symptom_id' => 131, 'category' => 'general'],
                ['toxin_id' => 19, 'symptom_id' => 208, 'category' => 'general'],
                ['toxin_id' => 19, 'symptom_id' => 167, 'category' => 'general'],
                ['toxin_id' => 19, 'symptom_id' => 176, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 209, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 44, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 41, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 210, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 211, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 212, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 213, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 214, 'category' => 'neurological manifestations'],
                ['toxin_id' => 19, 'symptom_id' => 247, 'category' => 'haematological'],
                ['toxin_id' => 19, 'symptom_id' => 355, 'category' => 'haematological'],
                ['toxin_id' => 19, 'symptom_id' => 278, 'category' => 'haematological'],
                ['toxin_id' => 19, 'symptom_id' => 298, 'category' => 'haematological'],
                ['toxin_id' => 19, 'symptom_id' => 324, 'category' => 'haematological'],
                ['toxin_id' => 19, 'symptom_id' => 330, 'category' => 'haematological'],
                ['toxin_id' => 19, 'symptom_id' => 335, 'category' => 'haematological'],
            ]
        );
    }
}
