<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident; 
use App\Toxicity;
use App\Natural;

class update extends Controller
{
    public function edit($incident)
    {
        
        $incident = Incident::find($incident);
        $toxicity = Toxicity::find($incident->toxicity_id);
        $natural = Natural::find($toxicity->id);
        //$toxicity = $incident->toxicity->natural->flora;
        //dd($toxicity);

        return view('update.AththanaUpdateForm',compact('incident','natural'));


    }
}
