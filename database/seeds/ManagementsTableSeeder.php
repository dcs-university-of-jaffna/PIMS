<?php

/**
 * Seeder for managements table
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
 * Seeder class for managements table
 * php version 7.2.19
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
                ['name' =>  'activated_chracol_doses'],
                ['name' =>  'adrenaline'],
                ['name' =>  'alkalinization'],
                ['name' =>  'analgesics_given'],
                ['name' =>  'antibiotics_given'],
                ['name' =>  'anticonvulsants_given'],
                ['name' =>  'antidote_given'],
                ['name' =>  'antihistamine'],
                ['name' =>  'antropine_given'],
                ['name' =>  'blood_transfusion'],
                ['name' =>  'calcium_gluconate_given'],
                ['name' =>  'corticosteroids'],
                ['name' =>  'dialysis'],
                ['name' =>  'dopamine'],
                ['name' =>  'gastric_aspiration'],
                ['name' =>  'gastric_lavage'],
                ['name' =>  'ice_packs'],
                ['name' =>  'icu_care'],
                ['name' =>  'invasive_ventilation'],
                ['name' =>  'methylprednisalone'],
                ['name' =>  'nacl_given'],
                ['name' =>  'nahco3_given'],
                ['name' =>  'plasma_expanders'],
                ['name' =>  'prednisalone_given'],
                ['name' =>  'renal_rep_theraphy'],
                ['name' =>  'resuscitation'],
                ['name' =>  'steroids'],
                ['name' =>  'stinger_scrapped'],
                ['name' =>  'supportive_therapy'],


            ]
        );
    }
}
