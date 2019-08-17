<?php

/**
 * Seeder for toxicities table
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
 * Seeder class for toxicities table
 *
 * PHP version 7.2.19
 *
 * Use this seeder to seed toxicities table
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class ToxicitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toxicities')->insert(
            [
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Aththana',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Aththana',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Aththana',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Divikaduru',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Divikaduru',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Diyakaduru',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Diyakaduru',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Diyakaduru',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Diyakaduru',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Endaru_Ingestion',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Godakaduru',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Habarala',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Hondala',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Hondala',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Hondala',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Endaru_Inhalation',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Endaru_Inhalation',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Kaneru',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Kepunkiriya',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Niyagala',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Niyagala',],
                ['main_group' => 'naturals', 'sub_group' => 'floras', 'name' => 'Niyagala',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Jellyfish',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Scorpion_Bite',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Snake_Bite',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Hornet_Sting',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Wasp_Sting',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Black_Widow_Spider',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Blister_Beetle',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Turtle_Fish',],
                ['main_group' => 'naturals', 'sub_group' => 'faunas', 'name' => 'Centipede',],
                ['main_group' => 'naturals', 'sub_group' => 'fungals', 'name' => 'Mushroom',],
                ['main_group' => 'naturals', 'sub_group' => 'microbials', 'name' => 'Batlism',],
                ['main_group' => 'naturals', 'sub_group' => 'microbials', 'name' => 'Food_Poisoning',],
                ['main_group' => 'naturals', 'sub_group' => 'microbials', 'name' => 'Food_Poisoning',],
            ]
        );
    }
}
