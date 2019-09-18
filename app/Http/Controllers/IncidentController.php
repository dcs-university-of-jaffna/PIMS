<?php

namespace App\Http\Controllers;

use App\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    public function show(Incident $incident){
        dd($incident);
    }
}

