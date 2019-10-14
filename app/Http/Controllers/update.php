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
        
        $incident = Incident::find($incident);
        //dd($incident);
        //$toxicity = Toxicity::find($incident->toxicity_id);
        //$natural = Natural::find($toxicity->id);

        $flora = $incident->toxicity->natural->flora;

        //$tempPrescription = Prescription::find($incident->id);
        //$Prescription = Prescription::find($tempPrescription->id);
        $managements = $incident->managements()->pluck('managements.id');
       // dd($managements);
        dd($flora);


        return view('update.FloraUpdateForm',compact('incident','managements','flora'));


    }
    public function update(Incident $incident)
    {
        //$incident=new Incident;
        //$toxicity = new Toxicity;
        //$natural = new Natural;

        //$incident->patient_id=$request->PHNid;
        //$incident->toxicity_id=$toxicity->id;
        //$incident->date=$request->date;
       // $incident->time=$request->time;
       // $incident->area=$request->area; 
        //$incident->symptom_others=$request->clinicals_others;
        //$incident->management_others=$request->managements_others;
        //$incident->comments=$request->comments;
        //$incident->save();
        $data = request()->validate([
            'date' =>'',
            'time' =>'',
            'area' =>''
        ]);
        //dd($data);
        $incident->save();
        
        return redirect('home');
    }
   /* function submitFlora(Request $request){

        $incidents = new incidents;
        $incidents->area = $request->area;
        $incidents->save();
        return view('home');

    }*/
}
