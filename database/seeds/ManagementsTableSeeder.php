<?php

/**
 * Seeder for managements table
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
 * Seeder class for managements table
 *
 * PHP version 7.2.19
 *
 * Use this seeder to seed managements table
 *
 *           **** Include all management details ****
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class ManagementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managements')->insert(
            [
                ['id' => 1, 'name' => 'activated chracol'],
                ['id' => 2, 'name' => 'adrenaline'],
                ['id' => 3, 'name' => 'alkalinization'],
                ['id' => 4, 'name' => 'analgesics'],
                ['id' => 5, 'name' => 'antibiotics'],
                ['id' => 6, 'name' => 'anticonvulsants'],
                ['id' => 7, 'name' => 'antidote'],
                ['id' => 8, 'name' => 'antihistamine'],
                ['id' => 9, 'name' => 'atropine'],
                ['id' => 10, 'name' => 'blood transfusion'],
                ['id' => 11, 'name' => 'calcium gluconate'],
                ['id' => 12, 'name' => 'corticosteroids'],
                ['id' => 13, 'name' => 'dialysis'],
                ['id' => 14, 'name' => 'dopamine'],
                ['id' => 15, 'name' => 'gastric aspiration'],
                ['id' => 16, 'name' => 'gastric lavage'],
                ['id' => 17, 'name' => 'ice packs'],
                ['id' => 18, 'name' => 'icu care'],
                ['id' => 19, 'name' => 'invasive ventilation'],
                ['id' => 20, 'name' => 'methylprednisalone'],
                ['id' => 21, 'name' => 'NaCl'],
                ['id' => 22, 'name' => 'NaHCO3'],
                ['id' => 23, 'name' => 'plasma expanders'],
                ['id' => 24, 'name' => 'prednisalone'],
                ['id' => 25, 'name' => 'renal rep theraphy'],
                ['id' => 26, 'name' => 'resuscitation'],
                ['id' => 27, 'name' => 'steroids'],
                ['id' => 28, 'name' => 'stinger scrapped'],
                ['id' => 29, 'name' => 'supportive therapy'],
                ['id' => 30, 'name' => 'wound cleaning'],
                ['id' => 31, 'name' => 'rest the area of bite'],
                ['id' => 32, 'name' => 'rest the area of sting'],
                ['id' => 33, 'name' => 'hydrocortisone'],
                ['id' => 34, 'name' => 'nebulisation'],
                ['id' => 35, 'name' => 'peritoneal'],
                ['id' => 36, 'name' => 'hemodialysis'],
                ['id' => 37, 'name' => 'tetanus prophylaxis'],
                ['id' => 38, 'name' => 'topical steroids'],
                ['id' => 39, 'name' => 'anti snake venom serum(AVS)'],
                ['id' => 40, 'name' => 'inotropic support'],
                ['id' => 41, 'name' => 'antacids'],
                ['id' => 42, 'name' => 'diazepam'],
                ['id' => 43, 'name' => 'general anaesthesia'],
                ['id' => 44, 'name' => 'pralidoxime'],
                ['id' => 45, 'name' => '1% methylene blue IV'],
                ['id' => 46, 'name' => 'ascorbio acid IV'],
                ['id' => 47, 'name' => 'potassium ferric hexacyanoferrate(purssian blue)'],
                ['id' => 48, 'name' => 'urinary alkalinization'],
                ['id' => 49, 'name' => 'd penicillamine'],
                ['id' => 50, 'name' => 'vitamine k therapy'],
                ['id' => 51, 'name' => 'sodium bicarbonates'],
                ['id' => 52, 'name' => 'adrenaline IM'],
                ['id' => 53, 'name' => 'adrenaline IV'],
                ['id' => 54, 'name' => 'hydrocortisone IV'],
                ['id' => 55, 'name' => 'broncho dilators'],

            ]
        );
    }
}
