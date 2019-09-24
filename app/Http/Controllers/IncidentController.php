<?php

namespace App\Http\Controllers;

use App\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function edit(Incident $incident)
    {
        $symptoms = $incident->symptoms->pluck('id');
        $managements = $incident->managements->pluck('id');
        $toxicity = $incident->toxicity->natural->flora;
        return view('updates/edit', compact('incident', 'toxicity', 'symptoms', 'managements'));
    }


    public function update(Request $request, Incident $incident){
        //$request = request();
        dd($request);
    }
}

