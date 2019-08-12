<?php

/**
 * Seeder for toxicities table
 * php version 7.2.19
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
 * php version 7.2.19
 *
 * Use this seeder to seed toxicities table
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class ToxicityTableSeeder extends Seeder
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
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Aththana',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Aththana',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Aththana',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Divikaduru',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Divikaduru',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Diyakaduru',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Diyakaduru',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Diyakaduru',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Diyakaduru',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Endaru_Ingestion',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Godakaduru',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Habarala',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Hondala',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Hondala',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Hondala',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Habarala_Eye_Contact',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Endaru_Inhalation',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Endaru_Inhalation',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Kaneru',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Kepunkiriya',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Niyagala',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Niyagala',],
                ['main_group' => 'Naturals', 'sub_group' => 'Floras', 'name' => 'Niyagala',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Bee_Sting',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Jellyfish',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Scorpion_Bite',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Snake_Bite',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Hornet_Sting',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Wasp_Sting',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Black_Widow_Spider',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Blister_Beetle',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Turtle_Fish',],
                ['main_group' => 'Naturals', 'sub_group' => 'Faunas', 'name' => 'Centipede',],
                ['main_group' => 'Naturals', 'sub_group' => 'Fungal', 'name' => 'Mushroom',],
                ['main_group' => 'Naturals', 'sub_group' => 'Microbial', 'name' => 'Batlism',],
                ['main_group' => 'Naturals', 'sub_group' => 'Microbial', 'name' => 'Food_Poisoning',],
                ['main_group' => 'Naturals', 'sub_group' => 'Microbial', 'name' => 'Food_Poisoning',],
            ]
        );
    }
}
