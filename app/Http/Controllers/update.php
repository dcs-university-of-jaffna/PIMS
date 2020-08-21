<?php

namespace App\Http\Controllers;

use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Prescription;
use App\Patient;
use App\Flora;
use App\IncidentSymptom;
use App\Laboratory;
use App\Management;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;



class update extends Controller
{
    public function edit($incident)
    {
        //get incident value ,for given id number
        $incident = Incident::find($incident);

        $toxicity = Toxicity::find($incident->toxicity_id);
        //$natural = Natural::find($toxicity->id);
       
        $flora = $incident->toxicity->natural->flora;
        //$incidentSymptom = IncidentSymptom::find($incident->id );
        //$tempPrescription = Prescription::find($incident->id);
        //$Prescription = $incident->natural->id;
        //dd($Prescription);
        //$incidentSymptom = $incident->incidentSymptom;
       // $incidentSymptom = $incident->IncidentSymptom->pluck('IncidentSymptom.id');
       //get clinicle details 
        $symptoms = $incident->symptoms;
        $management = $incident->managements()->pluck('management.id');
        //$managements = $incident->ManagementGroup;
        $patient = $incident->patient;
        $laboratory = $incident->laboratory->details;
        //dd($laboratory);
        //dd($patient);
        //($managements);
        //dd($flora);
        //dd($toxicity->name);
        //dd($symptoms);

        return view('update.FloraUpdateForm',compact('incident','management','flora','toxicity','symptoms','patient','laboratory'));
    }
    public function update(Request $request,$id)
    {
        $data = Incident::find($id);
        $data->date = $request->date;
        $data->time = $request->time;
        $data->area = $request->area;
        $data->symptom_others = $request->symptom_others;
        $data->comments =$request->comments;
        $data->management_others=$request->managements_others;

        $data->save();
        
        $data1 = $data->toxicity->natural->Flora;
        $data1->plant_part=$request->plant_part;
        $data1->circumstance =$request->circumstance;
        $data1->poisoning_mode=$request->poisoning_mode;
        $data1->amount=$request->amount;
        $data1->activated_chracol_doses = $request->activated_chracol_doses;
        $data1->antidote= $request->antidote; 

        $data1->save();
        $patient = $data->patient;
        //dd($patient);
        $patient->fname = $request->fname;
        $patient->lname = $request->lname;
        $patient->phn = $request->phn;
        $patient->bdate = $request->bdate;
        $patient->nic = $request->nic;
        $patient->address = $request->address;
        $patient->gender = $request->gender;
        $patient->contact = $request->contact;
        //dd($patient);
        $patient->save();

        $laboratory= $data->laboratory;
        $laboratory->details=$request->details;
        $laboratory->save();
        /*$symptoms = $data->symptoms;
        //dd($request->CNS_effects);
        $symptoms->id = $request->CNS_effects;
        $symptoms->save();*/

        //$user = auth()->user()->id;
        //$management= $request->management;
        //dd($management);
        //$d = array_fill_keys($management);

        //$data->managements()->sync($d);

        //$AththanaClinical= $request->AththanaClinical;
        $data->managements()->sync($request->management);
        $data->symptoms()->sync($request->Clinical);
        //dd($AththanaClinical);
         return redirect('home');
    }
}
