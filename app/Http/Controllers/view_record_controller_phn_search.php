<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use DB;

class view_record_controller_phn_search extends Controller
{
    
    public function view_record(Request $request){
      
      /*show record route pass the incident_id,toxicity_id,toxicity_name,toxicity_sub_group
         pass the value */

        if($request->toxicity_sub_group=='flora'){
            if($request->toxicity_name == 'Divikaduru'){
               
              $incident = Incident::find($request->incident_id);
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;
              $symptom  = $incident->symptoms;
              $management = $incident->managements();
              $user    = $incident->users();                                          
           
                return view('View_Divi_kaduru',compact('incident','patient','toxicity','symptom','management','user'));
            }
        }
    }
}
