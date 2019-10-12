<?php

namespace App\Http\Controllers;

use App\Flora;
use App\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function edit($id)
    {
        //Incident $incident
        $incident = Incident::with(['patient:id,phn', 'symptoms:symptoms.id', 'managements:managements.id'])->find($id);
        $symptoms = $incident->symptoms->pluck('id');
        //$symptoms = $incident->symptoms;
        $managements = $incident->managements->pluck('id');
        //$managements = $incident->managements;
        $toxicity = $incident->toxicity->natural->flora;
        return view('updates/edit', compact('incident', 'toxicity', 'symptoms', 'managements'));
        //dd(compact('incident', 'toxicity', 'symptoms', 'managements'));
    }


    public function update(Request $request, Incident $incident){
        //$request = request();
        //dd($request);

        /*
        $incident->date = $request->date;
        $incident->time = $request->time;
        $incident->area = $request->area;
        $incident->management_others = $request->management_others;
        $incident->symptom_others = $request->symptom_others;
        $incident->comments = $request->comments;

        $incident->save();*/

        $incident->update([
            'date' => $request->date,
            'time' => $request->time,
            'area' => $request->area,
            'management_others' => $request->management_others,
            'symptom_others' => $request->symptom_others,
            'comments' => $request->comments,
        ]);


       // return redirect('/home');


        $flora_id = $incident->toxicity->id;

        $flora = Flora::find($flora_id);

        $flora->update([
            'plant_part' => $request-> plant_part,
            'amount' => $request-> amount,
            'circumstance' => $request-> circumstance,
            'poisoning_mode'  => $request-> poisoning_mode,
            'antidote' => $request->antidote,
            'activated_chracol_doses' => $request->act_chr_doses,
        ]);

        $incident->symptoms()->sync($request->symptoms);

        $user = auth()->user()->id;


        /*foreach ($request->managemets as $mn){
            array_push($mang, $mn => ['doctor_id' => $user]));
        }*/
        $managements = $request->managements;
        //array_combine( $managements, )
        $managements = array_fill_keys($managements, ['doctor_id' => $user]);
        $incident->managements()->sync($managements);

        return redirect('/home');

    }
}

