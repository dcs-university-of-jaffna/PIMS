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

        $incident = Incident::find($incident);
        //dd($incident);
        //$toxicity = Toxicity::find($incident->toxicity_id);
        //$natural = Natural::find($toxicity->id);

        $flora = $incident->toxicity->natural->flora;

        //$tempPrescription = Prescription::find($incident->id);
        //$Prescription = $incident->natural->id;
        //dd($Prescription);
        $managements = $incident->managements()->pluck('managements.id');
        // dd($managements);
        //dd($flora);


        return view('update.FloraUpdateForm',compact('incident','managements','flora'));


    }
    public function update(Request $request, $id)
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
        /*$data = request()->validate([
            'date' =>'',
            'time' =>'',
            'area' =>''
        ]);*/
        //dd($data);
        //$incident->save();
        //$request->incident->update($data);*/
        /*$incident = new Incident;
        $incident->time = $request->time;
        //$back=0;
        //dd( $incident->time);
        $incident->save();*/
        /*$incident->update([
            'date' => $request->date,
            'time' => $request->time,
            'area' => $request->area,
        ]);*/
        //$incident->update([
        // 'date' => $request->date,
        // ]);
        //$incident->save();
        $data = Incident::find($id);
        $data->date = $request->date;
        $data->time = $request->time;
        $data->area = $request->area;
        //$data->time = $request->date;

        $data->save();
        $data1 = $data->toxicity->natural->Flora;
        /*$toxicity = Toxicity::find($data);
        $natural = Natural::find($toxicity);
        $data1 = Flora::find($natural);
        $data1->plant_part = $request->plant_part;
        $data1->save();*/
        $data1->plant_part=$request->plant_part;
        //circumstance
        //poisoning_mode
        //amount
        $data1->circumstance =$request->circumstance;
        $data1->poisoning_mode=$request->poisoning_mode;
        $data1->amount=$request->amount;

        $data1->save();


        //$data2 = $data->;
        //$data3=$data->managements()->pluck('managements.id');
        $user = auth()->user()->id;
        $management=$request->management;
        $d =array_fill_keys($management,['doctor_id'=>$user]);
        $data->managements()->sync($d);
        //dd($data3);
        //$data2 = $request->managements;
        //dd($request->managements);
        //dd($data2);
        //$data2->save();
        //managements others


        return redirect('home');
    }
    /* function submitFlora(Request $request){

         $incidents = new incidents;
         $incidents->area = $request->area;
         $incidents->save();
         return view('home');

     }*/
}
