<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\Symptom;

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
                  $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->flora;     
                  $management = $incident->managements()->pluck('managements.id');
                  $user    = $incident->users();                                          
            
                 // dd( $toxicity);
                return view('/flora_view/View_Divi_kaduru',compact('incident','patient','toxicity','symptoms','management','user'));
            }
  
   //Ahthana
           else if($request->toxicity_name == 'Aththana'){
                          
                $incident = Incident::find($request->incident_id);
                $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;     
                $management = $incident->managements()->pluck('managements.id');
                $user    = $incident->users();                                          
                 // dd($symptom);
                return view('/flora_view/View_Aththana',compact('incident','patient','toxicity','symptom','management','user'));
            }  

   //Diyakaduru
            else if($request->toxicity_name == 'DiyaKaduru'){
                                      
                  $incident = Incident::find($request->incident_id);
                  $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->flora;     
                  $management = $incident->managements()->pluck('managements.id');
                  $user    = $incident->users();                                                                                  
              // dd($incident);
            return view('/flora_view/View_Diya_Kaduru',compact('incident','patient','toxicity','symptom','management','user'));
            } 

  //Endara
            else if($request->toxicity_name == 'Endaru'){
                                      
              $incident = Incident::find($request->incident_id);
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;
              $symptom  = $incident->symptoms;
              $management = $incident->managements();
              $user    = $incident->users();                                          
            // dd($incident);
             return view('/flora_view/Endaru',compact('incident','patient','toxicity','symptom','management','user'));
          } 
  
  //Godakaduru
            else if($request->toxicity_name == 'GodaKaduru'){
                                                
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

  //Hondala
            else if($request->toxicity_name == 'Hondala'){
                                                                
              $incident = Incident::find($request->incident_id);
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;
              $symptom  = $incident->symptoms;
              $management = $incident->managements();
              $user    = $incident->users();                                          
            // dd($incident);
              return view('/flora_view/Hondala',compact('incident','patient','toxicity','symptom','management','user'));
           } 

  //Kaneru 
            else if($request->toxicity_name == 'Kaneru'){
                                                                          
                $incident = Incident::find($request->incident_id);
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;
                $symptom  = $incident->symptoms;
                $management = $incident->managements();
                $user    = $incident->users();                                          
                // dd($incident);
                return view('/flora_view/Kaneru',compact('incident','patient','toxicity','symptom','management','user'));
           } 


//Kepunkiriya 
           else if($request->toxicity_name == 'Kepunkiriya'){
                                                                          
                $incident = Incident::find($request->incident_id);
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;
                $symptom  = $incident->symptoms;
                $management = $incident->managements();
                $user    = $incident->users();                                          
                // dd($incident);
                return view('/flora_view/Kepunkiriya',compact('incident','patient','toxicity','symptom','management','user'));
            } 

 //Niyagala
            else if($request->toxicity_name == 'Niyagala'){
                                                                                      
                $incident = Incident::find($request->incident_id);
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;
                $symptom  = $incident->symptoms;
                $management = $incident->managements();
                $user    = $incident->users();                                          
                // dd($incident);
                return view('/flora_view/Niyagala',compact('incident','patient','toxicity','symptom','management','user'));
            } 
  //Olinda

            else if($request->toxicity_name == 'Olinda'){
                                                                                                
              $incident = Incident::find($request->incident_id);
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;
              $symptom  = $incident->symptoms;
              $management = $incident->managements();
              $user    = $incident->users();                                          
              // dd($incident);
              return view('/flora_view/Olinda',compact('incident','patient','toxicity','symptom','management','user'));
             } 

  //Unknown plant poisoning

          else if($request->toxicity_name == 'Unknown plant poisoning'){
                                                                                                        
            $incident = Incident::find($request->incident_id);
            $patient  = $incident->patient;
            $toxicity = $incident->toxicity->natural->flora;
            $symptom  = $incident->symptoms;
            $management = $incident->managements();
            $user    = $incident->users();                                          
            // dd($incident);
            return view('/flora_view/Unknown_plant_poisoning',compact('incident','patient','toxicity','symptom','management','user'));
        } 


        }
    }
}
