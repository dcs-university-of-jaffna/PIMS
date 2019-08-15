<?php

/**
 * Seeder for symptoms table
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
 * Seeder class for symptoms table
 * PHP version 7.2.19
 *
 * Use this seeder to seed symptoms table
 *
 *           **** Include all symptom details ****
 *
 * @category Seeder
 * @package  Database/seeders
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class SymptomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert(
            [
                ['name' => 'abdominal_pain'],
                ['name' => 'acute_renal_failure'],
                ['name' => 'agitation'],
                ['name' => 'alopecia'],
                ['name' => 'anaphylaxis'],
                ['name' => 'anuria'],
                ['name' => 'anxiety'],
                ['name' => 'aphonia'],
                ['name' => 'atrial_and_venticular_ectopics'],
                ['name' => 'bleeding_manifestations'],
                ['name' => 'blepharospasm'],
                ['name' => 'blisters_of_oral_mucosa'],
                ['name' => 'bradycardia'],
                ['name' => 'bronchospasm'],
                ['name' => 'bulging_eyes'],
                ['name' => 'burning_sensation'],
                ['name' => 'burning_sensation_of_mouth'],
                ['name' => 'cardiac_arrhythmias'],
                ['name' => 'circumoral_paresthesia'],
                ['name' => 'cns_depression'],
                ['name' => 'coma'],
                ['name' => 'combative'],
                ['name' => 'confusion'],
                ['name' => 'conjunctival_chemosis'],
                ['name' => 'convulsion'],
                ['name' => 'corneal_abrasions'],
                ['name' => 'cough'],
                ['name' => 'cramps'],
                ['name' => 'cyanosis'],
                ['name' => 'cycloplegia'],
                ['name' => 'dehydration'],
                ['name' => 'delirium'],
                ['name' => 'demyelination'],
                ['name' => 'diarrhoea'],
                ['name' => 'diarrhoea_blood_and_mucus'],
                ['name' => 'diarrhoea_watery'],
                ['name' => 'dilation_of_pupils'],
                ['name' => 'disorientation'],
                ['name' => 'disturbance_of_consciousness'],
                ['name' => 'dizziness'],
                ['name' => 'drowsiness'],
                ['name' => 'dry_mouth'],
                ['name' => 'dryness_of_mucous_membrane'],
                ['name' => 'dysphagia'],
                ['name' => 'ecg_abnormalities'],
                ['name' => 'electrolytes_imbalance'],
                ['name' => 'epigastric_or_abdominal_pain'],
                ['name' => 'erythema'],
                ['name' => 'extensor_spasms'],
                ['name' => 'exudate_and_haemorrhages'],
                ['name' => 'eye_inflammation'],
                ['name' => 'eyelid_oedema'],
                ['name' => 'facial_oedema '],
                ['name' => 'fever'],
                ['name' => 'fits'],
                ['name' => 'fits_of_crying'],
                ['name' => 'flushing_of_face'],
                ['name' => 'gastroenteritis'],
                ['name' => 'haematemesis'],
                ['name' => 'haematuria'],
                ['name' => 'haemorrhagic_gastritis'],
                ['name' => 'haemorrhagic_gastroententis'],
                ['name' => 'hallucinogenic_effects'],
                ['name' => 'hb'],
                ['name' => 'hepatic_insufficiency'],
                ['name' => 'hepatic_necrosis'],
                ['name' => 'hepatotoxicity'],
                ['name' => 'hyperpnoea'],
                ['name' => 'hyperreflexia'],
                ['name' => 'hypersensitivity_reactions'],
                ['name' => 'hyperthemia'],
                ['name' => 'hypocalcemia'],
                ['name' => 'hypoglycemia'],
                ['name' => 'hypotension'],
                ['name' => 'hypovolaemia'],
                ['name' => 'hypovolemic_shock'],
                ['name' => 'hypoxaemia'],
                ['name' => 'impaired_articulation'],
                ['name' => 'intense_pain'],
                ['name' => 'junctional_rhythms'],
                ['name' => 'laryngeal_oedema'],
                ['name' => 'malaise'],
                ['name' => 'malena'],
                ['name' => 'metabolic_acidosis'],
                ['name' => 'muscle_twitching'],
                ['name' => 'mydriasis'],
                ['name' => 'myocarditis'],
                ['name' => 'myoglobinuria'],
                ['name' => 'nausea'],
                ['name' => 'necrosis'],
                ['name' => 'necrotic_oesophagitis'],
                ['name' => 'necrotising_enteritis'],
                ['name' => 'numbness_and_burning_of_mouth'],
                ['name' => 'oedema_of_lips'],
                ['name' => 'oedema_of_salivary_glands'],
                ['name' => 'oedema_of_throat'],
                ['name' => 'oedema_of_tongue'],
                ['name' => 'oliguria'],
                ['name' => 'opisthotonus'],
                ['name' => 'oral_cavity_irritation'],
                ['name' => 'pain'],
                ['name' => 'painful_convulsions'],
                ['name' => 'pallor'],
                ['name' => 'pancreatitis'],
                ['name' => 'papilloedema'],
                ['name' => 'photophobia'],
                ['name' => 'polydipsia'],
                ['name' => 'polyneuropathy'],
                ['name' => 'profuse_salivation'],
                ['name' => 'pruritus'],
                ['name' => 'psychomotor_disturbances'],
                ['name' => 'pulmonary_infiltration'],
                ['name' => 'pulmonary_oedema'],
                ['name' => 'renal_failure'],
                ['name' => 'respiratory_depression'],
                ['name' => 'respiratory_distress'],
                ['name' => 'respiratory_failure'],
                ['name' => 'restlessness'],
                ['name' => 'retinal_haemorrhages'],
                ['name' => 'retinopathy'],
                ['name' => 'rhabdomyolysis'],
                ['name' => 'right_iliac_fossa_tenderness'],
                ['name' => 'risus_sardonicus'],
                ['name' => 'salivation'],
                ['name' => 'seizure'],
                ['name' => 'shock'],
                ['name' => 'sinoatrial_block'],
                ['name' => 'sinus_bradycardia'],
                ['name' => 'slow_pulse'],
                ['name' => 'sweating'],
                ['name' => 'swelling'],
                ['name' => 'tachycardia'],
                ['name' => 'talkativeness'],
                ['name' => 'tender_or_enlarged_lever'],
                ['name' => 'tenderness'],
                ['name' => 'thirst'],
                ['name' => 'tightness_of_chest'],
                ['name' => 'tremors'],
                ['name' => 'trismus'],
                ['name' => 'urticaria'],
                ['name' => 'ventricular_arrhythmia'],
                ['name' => 'ventricular_ectopics'],
                ['name' => 'ventricular_fibrillation'],
                ['name' => 'vomiting'],
                ['name' => 'watery_eyes'],
                ['name' => 'weakness'],
                ['name' => 'yellow_vision'],

            ]
        );
    }
}
