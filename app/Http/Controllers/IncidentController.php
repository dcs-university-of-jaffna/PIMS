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

        $form_managements = $incident->toxicity->management_group->managements;
        $form_symptoms = $incident->toxicity->toxin->symptoms;

        $toxin_group = $incident->toxicity->sub_group;

        $toxin = $incident->toxicity->toxin->name;

        $managements = $incident->managements->pluck('id');

        $toxicity = $incident->toxicity->natural->flora;

        return view('updates/'.$toxin_group.'/'.$toxin,
            compact('incident', 'toxicity', 'symptoms', 'managements', 'form_managements', 'form_symptoms'));

    }


    public function update(Request $request, Incident $incident){

        $incident->update([
            'date' => $request->date,
            'time' => $request->time,
            'area' => $request->area,
            'management_others' => $request->management_others,
            'symptom_others' => $request->symptom_others,
            'comments' => $request->comments,
        ]);

        $symptoms = $request->symptoms;
        $incident->symptoms()->sync($symptoms);

        $managements = $request->managements;
        $incident->managements()->sync($managements);

        $user = auth()->user()->id;
        $incident->users()->syncWithoutDetaching($user);

        $toxicity_id = $incident->toxicity->id;
        //$toxicity_group = $incident->toxicity->sub_group;

        $flora = Flora::find($toxicity_id);

        $flora->update([
            'plant_part' => $request-> plant_part,
            'amount' => $request-> amount,
            'circumstance' => $request-> circumstance,
            'poisoning_mode'  => $request-> poisoning_mode,
            'antidote' => $request->antidote,
            'activated_chracol_doses' => $request->act_chr_doses,
        ]);

        return redirect('/home');

    }
}

