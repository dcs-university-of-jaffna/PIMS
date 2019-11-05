<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident; 
use App\Toxicity;
use App\Natural;
use App\Prescription;
use App\Patient;
use App\Flora;
use App\IncidentSymptom;
use App\Laboratory;
use Auth;
use Illuminate\Support\Facades\Input;



class update extends Controller
{
    public function edit($incident)
    {
        //get data from incident
        $incident = Incident::find($incident);

        $toxicity = Toxicity::find($incident->toxicity_id);
        //$natural = Natural::find($toxicity->id);

        $flora = $incident->toxicity->natural->flora;
        //$incidentSymptom = IncidentSymptom::find($incident->id );

        //$tempPrescription = Prescription::find($incident->id);
        //$Prescription = $incident->natural->id;
        //dd($Prescription);
        $incidentSymptom = $incident->incidentSymptom;
       // $incidentSymptom = $incident->IncidentSymptom->pluck('IncidentSymptom.id');
        //$symptoms = $incident->symptoms->pluck('id');
        $managements = $incident->managements()->pluck('managements.id');
       // dd($managements);
        //dd($flora);
        //dd($toxicity);
        //dd($incidentSymptom);

        return view('update.FloraUpdateForm',compact('incident','managements','flora','toxicity'));

    }
    public function update(Request $request,$id)
    {
        
        $data = Incident::find($id);
        $data->date = $request->date;
        $data->time = $request->time;
        $data->area = $request->area;
        $data->save();
        
        $data1 = $data->toxicity->natural->Flora;
        $data1->plant_part=$request->plant_part;
        $data1->circumstance =$request->circumstance;
        $data1->poisoning_mode=$request->poisoning_mode;
        $data1->amount=$request->amount;
        $data1->activated_chracol_doses = $request->activated_chracol_doses;
        $data1->antidote= $request->antidote; 

        $data1->save();


        $user = auth()->user()->id;
        $management=$request->management;
        $d =array_fill_keys($management,['doctor_id'=>$user]);
        $data->managements()->sync($d);

        $symptom = $request->AththanaClinical;

        //dd($symptom);

        return redirect('home');
    }
}
