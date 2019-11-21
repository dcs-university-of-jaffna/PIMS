<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Incident;
use App\Symptom;
use App\IncidentUser;
use App\Laboratory;



class DeleterecordController extends Controller
{
    public function deleterecord(Request $requset){
        //dd($requset->incident_id);
        $incident = Incident::find($requset->incident_id);
        $incident->symptoms()->sync([]); 
        $incident->managements()->sync([]); 
        $incident->users()->sync([]);
        $incident->laboratory()->delete(); 
        $incident->delete();
        
       //dd($incident);

    }
}
