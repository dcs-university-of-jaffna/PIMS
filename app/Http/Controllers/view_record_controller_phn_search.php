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
//Flora
        if($request->toxicity_sub_group=='flora'){
  //Divikaduru        
            if($request->toxicity_name == 'Divikaduru'){
               
                  $incident = Incident::find($request->incident_id);
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->flora;
                  $symptom  = $incident->symptoms;
                  $management = $incident->managements();
                  $user    = $incident->users();                                          
           
                return view('/flora_view/View_Divi_kaduru',compact('incident','patient','toxicity','symptom','management','user'));
            }
  
   //Ahthana
           else if($request->toxicity_name == 'Aththana'){
                          
                  $incident = Incident::find($request->incident_id);
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->flora;
                  $symptom  = $incident->symptoms;
                  $management = $incident->managements();
                  $user    = $incident->users();                                          
                 // dd($incident);
                return view('/flora_view/View_Aththana',compact('incident','patient','toxicity','symptom','management','user'));
            }  

   //Diyakaduru
            else if($request->toxicity_name == 'Diyakaduru'){
                                      
                $incident = Incident::find($request->incident_id);
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;
                $symptom  = $incident->symptoms;
                $management = $incident->managements();
                $user    = $incident->users();                                          
              // dd($incident);
            return view('/flora_view/View_Diya_Kaduru',compact('incident','patient','toxicity','symptom','management','user'));
            } 

  //Endara
            else if($request->toxicity_name == 'Endara'){
                                      
              $incident = Incident::find($request->incident_id);
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;
              $symptom  = $incident->symptoms;
              $management = $incident->managements();
              $user    = $incident->users();                                          
            // dd($incident);
             return view('/flora_view/Endara',compact('incident','patient','toxicity','symptom','management','user'));
          } 
  
  //Godakaduru
            else if($request->toxicity_name == 'Godakaduru'){
                                                
              $incident = Incident::find($request->incident_id);
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;
              $symptom  = $incident->symptoms;
              $management = $incident->managements();
              $user    = $incident->users();                                          
            // dd($incident);
            return view('/flora_view/Godakaduru',compact('incident','patient','toxicity','symptom','management','user'));
          } 
  
  //Habarala
            else if($request->toxicity_name == 'Habarala'){
                                                      
              $incident = Incident::find($request->incident_id);
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;
              $symptom  = $incident->symptoms;
              $management = $incident->managements();
              $user    = $incident->users();                                          
            // dd($incident);
              return view('/flora_view/Habarala',compact('incident','patient','toxicity','symptom','management','user'));
          } 














        }
    }
}
