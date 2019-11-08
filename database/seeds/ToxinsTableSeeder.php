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
            ]
        );
    }
}
