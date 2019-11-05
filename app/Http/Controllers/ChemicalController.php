<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptom;
use App\Chemical;
use App\Management;
use App\Patient;
use App\Toxicity;
use App\Incident;
use DB;
use App\Laboratory;
use App\IncidentSymptom;
use App\Prescription;
use Auth;

class ChemicalController extends Controller
{
    public function firstpage($id)
    {
        return view('Chemicals_Details.First_Page',compact('id'));
    }
    
    public function phnStore(Request $request)
    {
        $id = $request->id;

        //save phn in patient table
        $phn = new Patient();
        $phn->phn = $request->phn;
        $phn->save();

        //get management features from management table
        $managementData1 = Management::select('name')->where('id',26)->get();
        $managementData2 = Management::select('name')->where('id',16)->get();
        $managementData3 = Management::select('name')->where('id',34)->get();
        $managementData4 = Management::select('name')->where('id',42)->get();
        $managementData5 = Management::select('name')->where('id',9)->get();
        $managementData6 = Management::select('name')->where('id',44)->get();
        $managementData7 = Management::select('name')->where('id',45)->get();
        $managementData8 = Management::select('name')->where('id',46)->get();
        $managementData9 = Management::select('name')->where('id',47)->get();
        $managementData10 = Management::select('name')->where('id',48)->get();
        $managementData11 = Management::select('name')->where('id',49)->get();
        $managementData12 = Management::select('name')->where('id',36)->get();
        $managementData13 = Management::select('name')->where('id',6)->get();
        $managementData14 = Management::select('name')->where('id',43)->get();
        $managementData15 = Management::select('name')->where('id',50)->get();
        $managementData16 = Management::select('name')->where('id',5)->get();
        $managementData17 = Management::select('name')->where('id',51)->get();
        $managementData18 = Management::select('name')->where('id',53)->get();
        $managementData19 = Management::select('name')->where('id',52)->get();
        $managementData20 = Management::select('name')->where('id',55)->get();
        $managementData21 = Management::select('name')->where('id',54)->get();

        if($id==1) {

                $id = 'Carbamate_Insecticides';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',89)->get();
                $clinicalData2 = Symptom::select('name')->where('id',144)->get();
                $clinicalData3 = Symptom::select('name')->where('id',216)->get();
                $clinicalData4 = Symptom::select('name')->where('id',34)->get();
                $clinicalData5 = Symptom::select('name')->where('id',218)->get();
                $clinicalData6 = Symptom::select('name')->where('id',130)->get();
                $clinicalData7 = Symptom::select('name')->where('id',124)->get();
                $clinicalData8 = Symptom::select('name')->where('id',219)->get();
                $clinicalData9 = Symptom::select('name')->where('id',220)->get();
                $clinicalData10 = Symptom::select('name')->where('id',221)->get();
                $clinicalData11 = Symptom::select('name')->where('id',204)->get();
                $clinicalData12 = Symptom::select('name')->where('id',222)->get();
                $clinicalData13 = Symptom::select('name')->where('id',217)->get();
                $clinicalData14 = Symptom::select('name')->where('id',113)->get();
                $clinicalData15 = Symptom::select('name')->where('id',223)->get();
                $clinicalData16 = Symptom::select('name')->where('id',29)->get();
                $clinicalData17 = Symptom::select('name')->where('id',137)->get();
                $clinicalData18 = Symptom::select('name')->where('id',224)->get();
                $clinicalData19 = Symptom::select('name')->where('id',225)->get();
                $clinicalData20 = Symptom::select('name')->where('id',13)->get();
                $clinicalData21 = Symptom::select('name')->where('id',226)->get();
                $clinicalData22 = Symptom::select('name')->where('id',430)->get();
                $clinicalData23 = Symptom::select('name')->where('id',85)->get();
                $clinicalData24 = Symptom::select('name')->where('id',228)->get();
                $clinicalData25 = Symptom::select('name')->where('id',146)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',229)->get();
                $clinicalData27 = Symptom::select('name')->where('id',380)->get();
                $clinicalData28 = Symptom::select('name')->where('id',173)->get();
                $clinicalData29 = Symptom::select('name')->where('id',231)->get();
                $clinicalData30 = Symptom::select('name')->where('id',232)->get();
                $clinicalData31 = Symptom::select('name')->where('id',23)->get();
                $clinicalData32 = Symptom::select('name')->where('id',38)->get();
                $clinicalData33 = Symptom::select('name')->where('id',197)->get();
                $clinicalData34 = Symptom::select('name')->where('id',21)->get();
                $clinicalData35 = Symptom::select('name')->where('id',163)->get();
                $clinicalData36 = Symptom::select('name')->where('id',233)->get();
                $clinicalData37 = Symptom::select('name')->where('id',234)->get();
                $clinicalData38 = Symptom::select('name')->where('id',235)->get();

                return view('Chemicals_Details.Carbamate_Insecticides',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','clinicalData30','clinicalData31','clinicalData31',
                        'clinicalData32','clinicalData33','clinicalData34','clinicalData35','clinicalData36',
                        'clinicalData37','clinicalData38','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }

        if($id==2) {

                $id = 'Chlorophenoxy_Compounds';

                //get clinical features from symptom table
                $clinicalData1 = Symptom::select('name')->where('id',3)->get();
                $clinicalData2 = Symptom::select('name')->where('id',197)->get();
                $clinicalData3 = Symptom::select('name')->where('id',351)->get();
                $clinicalData4 = Symptom::select('name')->where('id',350)->get();
                $clinicalData5 = Symptom::select('name')->where('id',349)->get();
                $clinicalData6 = Symptom::select('name')->where('id',236)->get();
                $clinicalData7 = Symptom::select('name')->where('id',21)->get();
                $clinicalData8 = Symptom::select('name')->where('id',23)->get();
                $clinicalData9 = Symptom::select('name')->where('id',163)->get();
                $clinicalData10 = Symptom::select('name')->where('id',34)->get();
                $clinicalData11 = Symptom::select('name')->where('id',0)->get();
                $clinicalData12 = Symptom::select('name')->where('id',0)->get();
                $clinicalData13 = Symptom::select('name')->where('id',69)->get();
                $clinicalData14 = Symptom::select('name')->where('id',241)->get();
                $clinicalData15 = Symptom::select('name')->where('id',237)->get();
                $clinicalData16 = Symptom::select('name')->where('id',74)->get();
                $clinicalData17 = Symptom::select('name')->where('id',84)->get();
                $clinicalData18 = Symptom::select('name')->where('id',239)->get();
                $clinicalData19 = Symptom::select('name')->where('id',251)->get();
                $clinicalData20 = Symptom::select('name')->where('id',238)->get();
                $clinicalData21 = Symptom::select('name')->where('id',89)->get();
                $clinicalData22 = Symptom::select('name')->where('id',240)->get();
                $clinicalData23 = Symptom::select('name')->where('id',243)->get();
                $clinicalData24 = Symptom::select('name')->where('id',114)->get();
                $clinicalData25 = Symptom::select('name')->where('id',303)->get(); 
                $clinicalData26 = Symptom::select('name')->where('id',242)->get();
                $clinicalData27 = Symptom::select('name')->where('id',121)->get();
                $clinicalData28 = Symptom::select('name')->where('id',132)->get();
                $clinicalData29 = Symptom::select('name')->where('id',144)->get();

                return view('Chemicals_Details.Chlorophenoxy_Compounds',compact('id','phn','clinicalData1','clinicalData2',
                        'clinicalData3','clinicalData4','clinicalData5','clinicalData6','clinicalData7',
                        'clinicalData8','clinicalData9','clinicalData10','clinicalData11','clinicalData12',
                        'clinicalData13','clinicalData14','clinicalData15','clinicalData16','clinicalData17',
                        'clinicalData18','clinicalData19','clinicalData20','clinicalData21','clinicalData22',
                        'clinicalData23','clinicalData24','clinicalData25','clinicalData26','clinicalData27',
                        'clinicalData28','clinicalData29','managementData1','managementData2','managementData3',
                        'managementData4','managementData5','managementData6','managementData7','managementData8',
                        'managementData9','managementData10','managementData11','managementData12','managementData13',
                        'managementData14','managementData15','managementData16','managementData17',
                        'managementData18','managementData19','managementData20','managementData21'));
        }
    }

    public function save(Request $request)
    { 
        // to save details in toxicity table
        $toxicityData = new Toxicity();
        $toxicityData->main_group = 'chemicals';
        $toxicityData->sub_group = 'pesticides';
        if($this->firstpage(1)) {
            $toxicityData->name = 'Carbamate_Insecticides'; }
        else if($this->firstpage(2)) {
            $toxicityData->name = 'Chlorophenoxy_Compounds'; }
        else if($this->firstpage(3)) {
            $toxicityData->name = 'Coumarins'; }
        else if($this->firstpage(4)) {
            $toxicityData->name = 'Dithiocarbamate'; }
        else if($this->firstpage(5)) {
            $toxicityData->name = 'Diuron'; }
        else if($this->firstpage(6)) {
            $toxicityData->name = 'Fipronil'; }
        else if($this->firstpage(7)) {
            $toxicityData->name = 'Glyphosate'; }
        else if($this->firstpage(8)) {
            $toxicityData->name = 'Imidacloprid'; }
        else if($this->firstpage(9)) {
            $toxicityData->name = 'Metaldehyde'; }
        else if($this->firstpage(10)) {
            $toxicityData->name = 'Methyl_Bromide'; }
        else if($this->firstpage(11)) {
            $toxicityData->name = 'Nitrophends_and_Nitro_Cresols'; }
        else if($this->firstpage(12)) {
            $toxicityData->name = 'Organochlorines'; }
        else if($this->firstpage(13)) {
            $toxicityData->name = 'Organophosphates'; }
        else if($this->firstpage(14)) {
            $toxicityData->name = 'Phosphides'; }
        else if($this->firstpage(15)) {
            $toxicityData->name = 'Propanil'; }
        else if($this->firstpage(16)) {
            $toxicityData->name = 'Pyrethrum_and_related_compounds'; }
        else if($this->firstpage(17)) {
            $toxicityData->name = 'Thallium'; }
        else if($this->firstpage(18)) {
            $toxicityData->name = 'Thiocarbamates'; }
        else if($this->firstpage(19)) {
            $toxicityData->name = 'Triazenes_and_Triazoles'; }
        else  {
            $toxicityData->name = 'Other_pesticide_poisoning'; }
        $toxicityData->save();

        // to save details in chemical table
        $chemicalData = new Chemical();
        $chemicalData->sub_group = 'pesticides';
        $chemicalData->amount = $request->amount;
        $chemicalData->poisoning_mode = $request->mode;
        $chemicalData->circumstance = $request->circumstances;
        $chemicalData->save();

        // to save details in incident table
        $incidentsData = new Incident();
        $incidentsData->patient_id = DB::table('patients')->orderBy('id','desc')->first()->id;
        $incidentsData->toxicity_id = DB::table('toxicities')->orderBy('id','desc')->first()->id;
        $incidentsData->date = $request->date;
        $incidentsData->time = $request->time;
        $incidentsData->symptom_others = $request->clinical_comment;
        $incidentsData->management_others = $request->management_comment;
        $incidentsData->comments = $request->comment;
        if($request->save) {
            $incidentsData->is_submited = '0'; }
        if($request->submit) {
            $incidentsData->is_submited = '1'; }
        $incidentsData->save();

        // laboratry details to save in laboratry table
        $laboratiesData = new Laboratory();
        $laboratiesData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
        $laboratiesData->comments = $request->laboratry_comment;
        $laboratiesData->save();

        // clinical features to save in incident_symptoms table
        if($request->abdominal_cramps) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','abdominal cramps')->first()->id;
                $incidentSymptomData->save(); }
        if($request->acute_pancreatitis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','acute pancreatitis')->first()->id;
                $incidentSymptomData->save(); }
        if($request->ataxia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','ataxia')->first()->id;
                $incidentSymptomData->save(); }
        if($request->blurred_vision) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','blurred vision')->first()->id;
                $incidentSymptomData->save(); }
        if($request->bradycardia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','bradycardia')->first()->id;
                $incidentSymptomData->save(); }   
        if($request->cardiac_arrhythmia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','cardiac arrhythmia')->first()->id;
                $incidentSymptomData->save(); }       
        if($request->coma) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','coma')->first()->id;
                $incidentSymptomData->save(); }  
        if($request->conduction_defects) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','conduction defects')->first()->id;
                $incidentSymptomData->save(); }
        if($request->confusion) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','confusion')->first()->id;
                $incidentSymptomData->save(); }
        if($request->convulsions) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','convulsions')->first()->id;
                $incidentSymptomData->save(); }
        if($request->cranial_nerve_palsy) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','cranial nerve palsy')->first()->id;
                $incidentSymptomData->save(); }
        if($request->cyanosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','cyanosis')->first()->id;
                $incidentSymptomData->save(); }  
        if($request->delayed_weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','delayed weakness')->first()->id;
                $incidentSymptomData->save(); }
        if($request->diarrhoea) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','diarrhoea')->first()->id;
                $incidentSymptomData->save(); }
        if($request->disorientation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','disorientation')->first()->id;
                $incidentSymptomData->save(); }
        if($request->dyspnoea) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','dyspnoea')->first()->id;
                $incidentSymptomData->save(); }
        if($request->general_weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','general weakness')->first()->id;
                $incidentSymptomData->save(); }
        if($request->giddiness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','giddiness')->first()->id;
                $incidentSymptomData->save(); }
        if($request->headache) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','headache')->first()->id;
                $incidentSymptomData->save(); }
        if($request->hyperglycemia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hyperglycemia')->first()->id;
                $incidentSymptomData->save(); }
        if($request->incontinence) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','incontinence')->first()->id;
                $incidentSymptomData->save(); }
        if($request->incoordination) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','incoordination')->first()->id;
                $incidentSymptomData->save(); }
        if($request->lachrymation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','lachrymation')->first()->id;
                $incidentSymptomData->save(); }
        if($request->incoordination) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','incoordination')->first()->id;
                $incidentSymptomData->save(); }
        if($request->muscle_twitching) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','muscle twitching')->first()->id;
                $incidentSymptomData->save(); }
        if($request->nausea) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','nausea')->first()->id;
                $incidentSymptomData->save(); }
        if($request->paralysis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','paralysis')->first()->id;
                $incidentSymptomData->save(); }
        if($request->productive_cough) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','productive cough')->first()->id;
                $incidentSymptomData->save(); }
        if($request->pulmonary_oedema) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','pulmonary oedema')->first()->id;
                $incidentSymptomData->save(); }
        if($request->rhinorrhoea) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','rhinorrhoea')->first()->id;
                $incidentSymptomData->save(); }
        if($request->rhonchi) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','rhonchi')->first()->id;
                $incidentSymptomData->save(); }
        if($request->salivation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','salivation')->first()->id;
                $incidentSymptomData->save(); }
        if($request->small) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','small/pinpoint pupil')->first()->id;
                $incidentSymptomData->save(); }
        if($request->sweating) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','sweating')->first()->id;
                $incidentSymptomData->save(); }
        if($request->tenesmus) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','tenesmus')->first()->id;
                $incidentSymptomData->save(); }
        if($request->tightness_of_chest) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','tightness of chest')->first()->id;
                $incidentSymptomData->save(); }
        if($request->urinary_frequency) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','urinary frequency')->first()->id;
                $incidentSymptomData->save(); }
        if($request->vomiting) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','vomiting')->first()->id;
                $incidentSymptomData->save(); }
        if($request->weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','weakness')->first()->id;
                $incidentSymptomData->save(); }
        if($request->agitation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','agitation')->first()->id;
                $incidentSymptomData->save(); }
        if($request->burning_sensation_of_abdomen) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','burning sensation of abdomen')->first()->id;
                $incidentSymptomData->save(); }
        if($request->burning_sensation_of_chest) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','burning sensation of chest')->first()->id;
                $incidentSymptomData->save(); }   
        if($request->burning_sensation_of_throat) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','burning sensation of throat')->first()->id;
                $incidentSymptomData->save(); }       
        if($request->burning_sensation_of_tongue) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','burning sensation of tongue')->first()->id;
                $incidentSymptomData->save(); }  
        if($request->electrolyte_canges_specify) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','electrolyte canges specify')->first()->id;
                $incidentSymptomData->save(); }
        if($request->hyperreflexia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hyperreflexia')->first()->id;
                $incidentSymptomData->save(); }
        if($request->hyperventilation) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hyperventilation')->first()->id;
                $incidentSymptomData->save(); }
        if($request->hyporeflexia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hyporeflexia')->first()->id;
                $incidentSymptomData->save(); }
        if($request->hypotension) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','hypotension')->first()->id;
                $incidentSymptomData->save(); }
        if($request->metabolic_acidosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','metabolic acidosis')->first()->id;
                $incidentSymptomData->save(); }
        if($request->miosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','miosis')->first()->id;
                $incidentSymptomData->save(); }
        if($request->muscle_weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','muscle weakness')->first()->id;
                $incidentSymptomData->save(); }
        if($request->myotonia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','myotonia')->first()->id;
                $incidentSymptomData->save(); }
        if($request->nystagmus) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' nystagmus')->first()->id;
                $incidentSymptomData->save(); }
        if($request->pyrexia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','pyrexia')->first()->id;
                $incidentSymptomData->save(); }
        if($request->renal_failure) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','renal_failure')->first()->id;
                $incidentSymptomData->save(); }
        if($request->respiratory_alkalosis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','respiratory alkalosis')->first()->id;
                $incidentSymptomData->save(); }
        if($request->respiratory_muscle_weakness) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name','respiratory_muscle_weakness')->first()->id;
                $incidentSymptomData->save(); }
        if($request->rhabdomyolysis) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' rhabdomyolysis')->first()->id;
                $incidentSymptomData->save(); }
        if($request->tachycardia) {
                $incidentSymptomData = new IncidentSymptom();
                $incidentSymptomData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $incidentSymptomData->symptom_id = DB::table('symptoms')->where('name',' tachycardia')->first()->id;
                $incidentSymptomData->save(); }
        // management features to save in prescription table
        //special
        if($request->diazepam) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','diazepam')->first()->id;
                $prescriptionData->save(); }
        if($request->gastric_lavage) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','gastric lavage')->first()->id;
                $prescriptionData->save(); }
        if($request->nebulisation) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','nebulisation')->first()->id;
                $prescriptionData->save(); }
        if($request->resuscitation) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','resuscitation')->first()->id;
                $prescriptionData->save(); }
        //specific
        if($request->ascorbio_acid_iv) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','ascorbio acid iv')->first()->id;
                $prescriptionData->save(); }
        if($request->atropine) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','atropine')->first()->id;
                $prescriptionData->save(); }
        if($request->d_penicillamine) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','d penicillamine')->first()->id;
                $prescriptionData->save(); }
        if($request->hemodialysis) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','hemodialysis')->first()->id;
                $prescriptionData->save(); }
        if($request->methylene_blue_iv) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','1% Methylene blue iv')->first()->id;
                $prescriptionData->save(); }
        if($request->potassium_ferric) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','potassium ferric hexacyanoferrate(purssian blue)')->first()->id;
                $prescriptionData->save(); }
        if($request->pralidoxime) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','pralidoxime')->first()->id;
                $prescriptionData->save(); }
        if($request->urinary_alkalinization) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','urinary alkalinization')->first()->id;
                $prescriptionData->save(); }
        //supportie care
        if($request->adrenaline_im) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','adrenaline im')->first()->id;
                $prescriptionData->save(); }
        if($request->adrenaline_iv) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','adrenaline iv')->first()->id;
                $prescriptionData->save(); }
        if($request->antibiotics) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','antibiotics')->first()->id;
                $prescriptionData->save(); }
        if($request->anticonvulsants) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','anticonvulsants')->first()->id;
                $prescriptionData->save(); }
        if($request->broncho_dilators) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','broncho dilators')->first()->id;
                $prescriptionData->save(); }
        if($request->general_anaesthesia) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','general anaesthesia')->first()->id;
                $prescriptionData->save(); }
        if($request->hydrocortisone_iv) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','hydrocortisone iv')->first()->id;
                $prescriptionData->save(); }
        if($request->sodium_bicarbonates) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','sodium bicarbonates')->first()->id;
                $prescriptionData->save(); }
        if($request->vitamine_k_therapy) {
                $prescriptionData = new Prescription();
                $prescriptionData->incident_id = DB::table('incidents')->orderBy('id','desc')->first()->id;
                $prescriptionData->doctor_id = Auth::id();
                $prescriptionData->management_id = DB::table('managements')->where('name','vitamine k therapy')->first()->id;
                $prescriptionData->save(); }
        return redirect('/home'); 
    }

}

