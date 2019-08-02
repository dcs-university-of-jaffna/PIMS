<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Nullable;

class Clinicals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicals', function (Blueprint $table) {
            $table->bigIncrements('clinicals_id');
            $table->boolean('abdominal_pain')  ->default(0);
            $table->boolean('acute_renal_failure')  ->default(0);
            $table->boolean('agitation')  ->default(0);
            $table->boolean('alopecia')  ->default(0);
            $table->boolean('anaphylaxis')  ->default(0);
            $table->boolean('anuria')  ->default(0);
            $table->boolean('anxiety')  ->default(0);
            $table->boolean('aphonia')  ->default(0);
            $table->boolean('atrial_and_venticular_ectopics')  ->default(0);
            $table->boolean('bleeding_manifestations')  ->default(0);
            $table->boolean('blepharospasm')  ->default(0);
            $table->boolean('blisters_of_oral_mucosa')  ->default(0);
            $table->boolean('bradycardia')  ->default(0);
            $table->boolean('bronchospasm')  ->default(0);
            $table->boolean('bulging_eyes')  ->default(0);
            $table->boolean('burning_sensation')  ->default(0);
            $table->boolean('burning_sensation_of_mouth')  ->default(0);
            $table->boolean('cardiac_arrhythmias')  ->default(0);
            $table->boolean('circumoral_paresthesia')  ->default(0);
            $table->boolean('cns_depression')  ->default(0);
            $table->boolean('coma')  ->default(0);
            $table->boolean('combative')  ->default(0);
            $table->boolean('confusion')  ->default(0);
            $table->boolean('conjunctival_chemosis')  ->default(0);
            $table->boolean('convulsion')  ->default(0);
            $table->boolean('corneal_abrasions')  ->default(0);
            $table->boolean('cough')  ->default(0);
            $table->boolean('cramps')  ->default(0);
            $table->boolean('cyanosis')  ->default(0);
            $table->boolean('cycloplegia')  ->default(0);
            $table->boolean('dehydration')  ->default(0);
            $table->boolean('delirium')  ->default(0);
            $table->boolean('demyelination')  ->default(0);
            $table->boolean('diarrhoea')  ->default(0);
            $table->boolean('diarrhoea_blood_and_mucus')  ->default(0);
            $table->boolean('diarrhoea_watery')  ->default(0);
            $table->boolean('dilation_of_pupils')  ->default(0);
            $table->boolean('disorientation')  ->default(0);
            $table->boolean('disturbance_of_consciousness')  ->default(0);
            $table->boolean('dizziness')  ->default(0);
            $table->boolean('drowsiness')  ->default(0);
            $table->boolean('dry_mouth')  ->default(0);
            $table->boolean('dryness_of_mucous_membrane')  ->default(0);
            $table->boolean('dysphagia')  ->default(0);
            $table->boolean('ecg_abnormalities')  ->default(0);
            $table->boolean('electrolytes_imbalance')  ->default(0);
            $table->boolean('epigastric_or_abdominal_pain')  ->default(0);
            $table->boolean('erythema')  ->default(0);
            $table->boolean('extensor_spasms')  ->default(0);
            $table->boolean('exudate_and_haemorrhages')  ->default(0);
            $table->boolean('eye_inflammation')  ->default(0);
            $table->boolean('eyelid_oedema')  ->default(0);
            $table->boolean('facial_oedema')  ->default(0);
            $table->boolean('ferver')  ->default(0);
            $table->boolean('fits')  ->default(0);
            $table->boolean('fits_of_crying')  ->default(0);
            $table->boolean('flushing_of_face')  ->default(0);
            $table->boolean('gastroenteritis')  ->default(0);
            $table->boolean('haematemesis')  ->default(0);
            $table->boolean('haematuria')  ->default(0);
            $table->boolean('haemorrhagic_gastritis')  ->default(0);
            $table->boolean('haemorrhagic_gastroententis')  ->default(0);
            $table->boolean('hallucinogenic_effects')  ->default(0);
            $table->boolean('hb')  ->default(0);
            $table->boolean('hepatic_insufficiency')  ->default(0);
            $table->boolean('hepatic_necrosis')  ->default(0);
            $table->boolean('hepatotoxicity')  ->default(0);
            $table->boolean('hyperpnoea')  ->default(0);
            $table->boolean('hyperreflexia')  ->default(0);
            $table->boolean('hypersensitivity_reactions')  ->default(0);
            $table->boolean('hyperthemia')  ->default(0);
            $table->boolean('hypocalcemia')  ->default(0);
            $table->boolean('hypoglycemia')  ->default(0);
            $table->boolean('hypotension')  ->default(0);
            $table->boolean('hypovolaemia')  ->default(0);
            $table->boolean('hypovolemic_shock')  ->default(0);
            $table->boolean('hypoxaemia')  ->default(0);
            $table->boolean('impaired_articulation')  ->default(0);
            $table->boolean('intense_pain')  ->default(0);
            $table->boolean('junctional_rhythms')  ->default(0);
            $table->boolean('laryngeal_oedema')  ->default(0);
            $table->boolean('malaise')  ->default(0);
            $table->boolean('malena')  ->default(0);
            $table->boolean('metabolic_acidosis')  ->default(0);
            $table->boolean('muscle_twitching')  ->default(0);
            $table->boolean('mydriasis')  ->default(0);
            $table->boolean('myocarditis')  ->default(0);
            $table->boolean('myoglobinuria')  ->default(0);
            $table->boolean('nausea')  ->default(0);
            $table->boolean('necrosis')  ->default(0);
            $table->boolean('necrotic_oesophagitis')  ->default(0);
            $table->boolean('necrotising_enteritis')  ->default(0);
            $table->boolean('numbness_and_burning_of_mouth')  ->default(0);
            $table->boolean('oedema_of_lips')  ->default(0);
            $table->boolean('oedema_of_salivary_glands')  ->default(0);
            $table->boolean('oedema_of_throat')  ->default(0);
            $table->boolean('oedema_of_tongue')  ->default(0);
            $table->boolean('oliguria')  ->default(0);
            $table->boolean('opisthotonus')  ->default(0);
            $table->boolean('oral_cavity_irritation')  ->default(0);
            $table->boolean('pain')  ->default(0);
            $table->boolean('painful_convulsions')  ->default(0);
            $table->boolean('pallor')  ->default(0);
            $table->boolean('pancreatitis')  ->default(0);
            $table->boolean('papilloedema')  ->default(0);
            $table->boolean('photophobia')  ->default(0);
            $table->boolean('polydipsia')  ->default(0);
            $table->boolean('polyneuropathy')  ->default(0);
            $table->boolean('profuse_salivation')  ->default(0);
            $table->boolean('pruritus')  ->default(0);
            $table->boolean('psychomotor_disturbances')  ->default(0);
            $table->boolean('pulmonary_infiltration')  ->default(0);
            $table->boolean('pulmonary_oedema')  ->default(0);
            $table->boolean('renal_failure')  ->default(0);
            $table->boolean('respiratory_depression')  ->default(0);
            $table->boolean('respiratory_distress')  ->default(0);
            $table->boolean('respiratory_failure')  ->default(0);
            $table->boolean('restlessness')  ->default(0);
            $table->boolean('retinal_haemorrhages')  ->default(0);
            $table->boolean('retinopathy')  ->default(0);
            $table->boolean('rhabdomyolysis')  ->default(0);
            $table->boolean('right_iliac_fossa_tenderness')  ->default(0);
            $table->boolean('risus_sardonicus')  ->default(0);
            $table->boolean('salivation')  ->default(0);
            $table->boolean('seizure')  ->default(0);
            $table->boolean('shock')  ->default(0);
            $table->boolean('sinoatrial_block')  ->default(0);
            $table->boolean('sinus_bradycardia')  ->default(0);
            $table->boolean('slow_pulse')  ->default(0);
            $table->boolean('sweating')  ->default(0);
            $table->boolean('swelling')  ->default(0);
            $table->boolean('tacycardia')  ->default(0);
            $table->boolean('talkativeness')  ->default(0);
            $table->boolean('tender_or_enlarged_lever')  ->default(0);
            $table->boolean('tenderness')  ->default(0);
            $table->boolean('thirst')  ->default(0);
            $table->boolean('tightness_of_chest')  ->default(0);
            $table->boolean('tremors')  ->default(0);
            $table->boolean('trismus')  ->default(0);
            $table->boolean('urticaria')  ->default(0);
            $table->boolean('ventricular_arrhythmia')  ->default(0);
            $table->boolean('ventricular_ectopics')  ->default(0);
            $table->boolean('ventricular_fibrillation')  ->default(0);
            $table->boolean('vomiting')  ->default(0);
            $table->boolean('watery_eyes')  ->default(0);
            $table->boolean('weakness')  ->default(0);
            $table->boolean('yellow_vision')  ->default(0);
            $table->string('clinicals_others')->nullable();
            $table->timestamps();

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinicals');
    }
}
