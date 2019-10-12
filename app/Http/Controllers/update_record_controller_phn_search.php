<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\Symptom;

use DB;

class update_record_controller_phn_search extends Controller
{
    public function view_record(Request $request){
      
  
      /*update record route pass the incident_id,toxicity_id,toxicity_name,toxicity_sub_group
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
                return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
            }
  
   //Ahthana
           else if($request->toxicity_name == 'Aththana'){
                          
                $incident = Incident::find($request->incident_id);
                $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;     
                $management = $incident->managements()->pluck('managements.id');
                $user    = $incident->users();                                          
                //  dd($symptoms);
                return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
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
            return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
            } 

  //Endara
            else if($request->toxicity_name == 'Endaru'){
                                      
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                           
            // dd($incident);
             return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
          } 
  
  //Godakaduru
            else if($request->toxicity_name == 'GodaKaduru'){
                                                
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
            // dd($incident);
            return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
          } 
  
  //Habarala
            else if($request->toxicity_name == 'Habarala'){
                                                      
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
            // dd($incident);
              return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
           } 

  //Hondala
            else if($request->toxicity_name == 'Hondala'){
                                                                
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                            
           //  dd($incident->toxicity->name);
              return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
           } 

  //Kaneru 
            else if($request->toxicity_name == 'Kaneru'){
                                                                          
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
                // dd($incident);
                return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
           } 


//Kepunkiriya 
           else if($request->toxicity_name == 'Kepunkiriya'){
                                                                            
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                            
                // dd($incident);
                return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
            } 

 //Niyagala
            else if($request->toxicity_name == 'Niyagala'){
                                                                                      
                $incident = Incident::find($request->incident_id);
                $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;     
                $management = $incident->managements()->pluck('managements.id');
                $user    = $incident->users();                                           
                // dd($incident);
                return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
            } 
  //Olinda

            else if($request->toxicity_name == 'Olinda'){
                                                                                                
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
              // dd($incident);
              return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
             } 

  //Unknown plant poisoning

          else if($request->toxicity_name == 'Unknown plant poisoning'){
                                                                                                        
                  $incident = Incident::find($request->incident_id);
                  $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->flora;     
                  $management = $incident->managements()->pluck('managements.id');
                  $user    = $incident->users();                                           
            // dd($incident);
            return view('/flora_update/flora_update',compact('incident','patient','toxicity','symptoms','management','user'));
        } 


        }
          if($request->toxicity_sub_group=='fauna'){
             
                  $incident = Incident::find($request->incident_id);
                  $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->fauna;     
                  $management = $incident->managements()->pluck('managements.id');
                  $user    = $incident->users();  
                   
                  return view('/Fauna_View_Update/fauna_update',compact('incident','patient','toxicity','symptoms','management','user'));
        }
    }
}