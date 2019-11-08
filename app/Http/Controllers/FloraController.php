<?php

namespace App\Http\Controllers;

use App\Management;
use App\ManagementGroup;
use App\Patient;
use App\Incident;
use App\Symptom;
use App\Toxicity;
use App\Natural;
use App\Flora;
use App\Laboratory;
use App\Toxin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class FloraController extends Controller
{

    function FirstPage($id)
    {
        $ray = $id;
        return view('Detail_Forms.FloraFirst', compact('ray'));

    }

    function submitFloraPHN(Request $request)
    {
        $ray = $request->id;
        $phn = $request->PHN;
        $patient = Patient::firstOrCreate(['phn' => $phn]);
        $back = 0;
        $patient1 = $patient->phn;
        $patient2 = $patient->id;
        return view('Detail_Forms.FloraForm', compact('patient1', 'patient2', 'back', 'ray'));
    }

    function submitFlora(Request $request)
    {
        $ray = $request->id;
        $patient1 = Patient::pluck('phn')->last();
        $patient2 = Patient::pluck('id')->last();

        $toxicity = new Toxicity;
        $toxicity->main_group = 'naturals';
        $toxicity->sub_group = 'floras';

        $management_group = ManagementGroup::find(1);
        $toxicity->management_group()->associate($management_group);

        $toxin = Toxin::find($ray);
        $toxicity->toxin()->associate($toxin);
        $toxicity->save();

        $natural = new Natural;
        $natural->id = $toxicity->id;
        $natural->natural_type = 'floras';
        $natural->save();

        $flora = new Flora;
        $flora->id = $natural->id;
        $flora->plant_part = $request->plant_part;
        $flora->amount = $request->amount;
        $flora->circumstance = $request->circumstance;
        $flora->poisoning_mode = $request->poisoning_mode;
        $flora->antidote = $request->antidote;
        $flora->activated_chracol_doses = $request->activated_chracol_doses;
        $flora->save();

        $incident = new Incident;
        $incident->patient_id = $request->PHNid;
        $incident->toxicity_id = $toxicity->id;
        $incident->date = $request->date;
        $incident->time = $request->time;
        $incident->area = $request->area;
        $incident->symptom_others = $request->clinicals_others;
        $incident->management_others = $request->managements_others;
        $incident->comments = $request->comments;
        $incident->save();

        if (Input::get('submit') == 'submit') {
            $incident->is_submited = 1;
        }

        $symptom_ids = $request->AththanaClinical;

        if ($symptom_ids) {
            foreach ($symptom_ids as $symptom_id) {
                $incident->symptoms()->attach($symptom_id);
            }
        }

        $management_ids = $request->management;

        if ($management_ids) {
            foreach ($management_ids as $management_id) {
                $incident->managements()->attach($management_id);
            }
        }

        $doctor = auth()->user()->id;
        $incident->users()->attach($doctor);

        $laboratory = new  Laboratory;
        $laboratory->comments = $request->Lab_Comments;
        $laboratory->incident()->associate($incident);
        $laboratory->save();

        $back = 1;

        return view('Detail_Forms.FloraForm', compact('patient1', 'patient2', 'back', 'ray'));
    }

}

