<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToxinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toxins')->insert(
            [
                ['id' => 1, 'name' => 'aththana'],
                ['id' => 2, 'name' => 'divikaduru'],
                ['id' => 3, 'name' => 'diyakaduru'],
                ['id' => 4, 'name' => 'endaru'],
                ['id' => 5, 'name' => 'godakaduru'],
                ['id' => 6, 'name' => 'habarala'],
                ['id' => 7, 'name' => 'hondala'],
                ['id' => 8, 'name' => 'kaneru'],
                ['id' => 9, 'name' => 'kepunkiriya'],
                ['id' => 10, 'name' => 'niyagala'],
                ['id' => 11, 'name' => 'olinda'],
                ['id' => 12, 'name' => 'unknown plant poisoning'],
                ['id' => 13, 'name' => 'bee sting'],
                ['id' => 14, 'name' => 'black Widow spider'],
                ['id' => 15, 'name' => 'centipede bite'],
                ['id' => 16, 'name' => 'jelly fish'],
                ['id' => 17, 'name' => 'scorpion bite'],
                ['id' => 18, 'name' => 'snake bite'],
                ['id' => 19, 'name' => 'sea snake bite'],
                ['id' => 20, 'name' => 'turtle fish poisoning'],
                ['id' => 21, 'name' => 'blister Beetle'],
                ['id' => 22, 'name' => 'carbamate insecticides'],
                ['id' => 23, 'name' => 'chlorophenoxy compounds'],
                ['id' => 24, 'name' => 'coumarins'],
                ['id' => 25, 'name' => 'dithiocarbamate'],
                ['id' => 26, 'name' => 'diuron'],
                ['id' => 27, 'name' => 'fipronil'],
                ['id' => 28, 'name' => 'glyphosate'],
                ['id' => 29, 'name' => 'imidacloprid'],
                ['id' => 30, 'name' => 'metaldehyde'],
                ['id' => 31, 'name' => 'methyl bromide'],
                ['id' => 32, 'name' => 'nitrophends and nitro cresols'],
                ['id' => 33, 'name' => 'organochlorines'],
                ['id' => 34, 'name' => 'organophosphates'],
                ['id' => 35, 'name' => 'phosphides'],
                ['id' => 36, 'name' => 'propanil'],
                ['id' => 37, 'name' => 'pyrethrum and related compounds'],
                ['id' => 38, 'name' => 'thallium'],
                ['id' => 39, 'name' => 'thiocarbamates'],
                ['id' => 40, 'name' => 'triazenes and triazoles'],
                ['id' => 41, 'name' => 'other pesticide poisoning'],

            ]
        );
    }
}
