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
                ['id' => 1, 'name' => 'Aththana'],
                ['id' => 2, 'name' => 'Divikaduru'],
                ['id' => 3, 'name' => 'Diyakaduru'],
                ['id' => 4, 'name' => 'Endaru'],
                ['id' => 5, 'name' => 'Godakaduru'],
                ['id' => 6, 'name' => 'Habarala'],
                ['id' => 7, 'name' => 'Hondala'],
                ['id' => 8, 'name' => 'Kaneru'],
                ['id' => 9, 'name' => 'Kepunkiriya'],
                ['id' => 10, 'name' => 'Niyagala'],
                ['id' => 11, 'name' => 'Olinda'],
                ['id' => 12, 'name' => 'Unknown plant poisoning'],
                ['id' => 13, 'name' => 'Bee sting'],
                ['id' => 14, 'name' => 'Black Widow spider'],
                ['id' => 15, 'name' => 'Centipede bite'],
                ['id' => 16, 'name' => 'Jelly fish'],
                ['id' => 17, 'name' => 'Scorpion bite'],
                ['id' => 18, 'name' => 'Snake bite'],
                ['id' => 19, 'name' => 'Sea snake bite'],
                ['id' => 20, 'name' => 'Turtle fish poisoning'],
                ['id' => 21, 'name' => 'Blister Beetle'],
            ]
        );
    }
}
