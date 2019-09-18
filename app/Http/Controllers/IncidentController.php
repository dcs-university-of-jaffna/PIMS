<?php

namespace App\Http\Controllers;

use App\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function show(Incident $incident)
    {
        $symptoms = $incident->symptoms()->pluck('symptoms.id');
        $managements = $incident->managements()->pluck('managements.id');
        $toxicity = $incident->toxicity->natural->flora;
        return view('updates/diyakaduru', compact('incident', 'toxicity', 'symptoms', 'managements'));
    }
}

