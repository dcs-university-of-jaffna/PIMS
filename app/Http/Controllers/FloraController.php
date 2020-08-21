<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Flora;
use App\IncidentSymptom;
use App\IncidentUser;
use App\IncidentManagement;
use App\Laboratory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class FloraController extends Controller
{

    function FirstPage($id)
    {
        $ray = $id;
        return view('Detail_Forms.FloraFirst', compact('ray'));

    }

    public function phnsearch(Request $request)
    {
        $pid = $request->pid;
        $ray = $request->id;
        $items = DB::table('patients')
            ->where('phn', '=', "$pid")
            ->get();


        return view('Detail_Forms.record', compact('items', 'ray'));
    }

    function submitFloraPHN(Request $request)
    {
        $pid = $request->pid;
        if($pid == ""){

            $pid = DB::table('patients')->insertGetId(
                [
                    'phn' => $request->phn,
                    'nic' => $request->nic,
                    'fname' => $request->fname,
                    'lname' => $request->lname,
                    'bdate' => $request->bdate,
                    'address' => $request->address,
                    'contact' => $request->contact,
                    'gender' => $request->gender,
                ]
            );

        }
        $ray = $request->id;

        $patient = Patient::find($pid);

        $back = 0;

        return view('Detail_Forms.FloraForm', compact('patient', 'back', 'ray'));

    }

    function submitFlora(Request $request)
    {
        $ray=$request->id;
        $symptoms = $request->AththanaClinical;
        $management =$request->management;
        return view('Detail_Forms.flora_update',compact('request','ray','symptoms','management'));
    }

    function updateFlora(Request $request)
    {
       
        $ray = $request->id;

        $patient = Patient::find($request->pid);
        $patient->update([
            'phn' => $request->phn,
            'nic' => $request->nic,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'bdate' => $request->bdate,
            'address' => $request->address,
            'contact' => $request->contact,
            'gender' => $request->gender,
        ]);

        $toxicity = new Toxicity;
        $toxicity->main_group = 'natural';
        $toxicity->sub_group = 'flora';

        switch  ($ray) {
            case 1:
                $toxicity->name = 'Aththana';
                break;
            case 2:
                $toxicity->name = 'Divikaduru';
                break;
            case 3:
                $toxicity->name = 'DiyaKaduru';
                break;
            case 4:
                $toxicity->name = 'Endaru';
                break;
            case 5:
                $toxicity->name = 'GodaKaduru';
                break;
            case 6:
                $toxicity->name = 'Habarala';
                break;
            case 7:
                $toxicity->name = 'Hondala';
                break;
            case 8:
                $toxicity->name = 'Kaneru';
                break;
            case 9:
                $toxicity->name = 'Kepunkiriya';
                break;
            case 10:
                $toxicity->name = 'Niyagala';
                break;
            case 11:
                $toxicity->name = 'Olinda';
                break;
            case 12:
                $toxicity->name = 'Unknown plant poisoning';
                break;
        }

        $toxicity->toxin_id = $ray;
        $toxicity->management_group_id = 1;
        $toxicity->save();

        $natural = new Natural;
        $natural->id = $toxicity->id;
        $natural->natural_type = 'flora';
        $natural->save();

        $flora = new Flora;
        $flora->id = $natural->id;
        $flora->plant_part = $request->plant_part;
        $flora->circumstance = $request->circumstance;
        $flora->poisoning_mode = $request->poisoning_mode;
        $flora->amount = $request->amount;

        if ($request->plant_part) {
            $flora->plant_part = $request->plant_part;
        }
        if ($request->circumstance) {
            $flora->circumstance = $request->circumstance;
        }
        if ($request->poisoning_mode) {
            $flora->poisoning_mode = $request->poisoning_mode;
        }
        $flora->antidote = $request->antidote;
        $flora->activated_chracol_doses = $request->activated_chracol_doses;
        $flora->save();

        $incident = new Incident;
        $incident->area = $request->area;
        if ($request->area) {
            $incident->area = $request->area;
        }
        $incident->patient_id = $request->pid;
        $incident->toxicity_id = $toxicity->id;
        $incident->date = $request->date;
        $incident->time = $request->time;
        $incident->symptom_others = $request->clinicals_others;
        $incident->management_others = $request->managements_others;
        $incident->comments = $request->comments;
        if (Input::get('submit') == 'submit') {
            $incident->is_submited = 1;
        }
        $incident->save();

        $laboratory = new  Laboratory;
        $laboratory->incident_id = $incident->id;
        $laboratory->comments = $request->Lab_Comments;
        $laboratory->save();


        $symptom = $request->AththanaClinical;
        if ($symptom){
            $incident->symptoms()->attach($symptom);
        }

        $management = $request->management;
        if ($management) {
            $incident->managements()->attach($management);
        }

        $incident->users()->attach([Auth::id()]);
        $back = 1;

        return view('Detail_Forms.saveForm');
    }

}

