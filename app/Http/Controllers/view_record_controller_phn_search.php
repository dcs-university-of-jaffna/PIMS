<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\Symptom;
use App\IncidentUser;
use App\SymptomToxin;
use APP\Toxin;
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
                   $laboratory = $incident->laboratory;
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->flora;     
                  $management = $incident->managements()->pluck('managements.id');
                  $user    = $incident->users();                                          
                    $username    =  DB::table('incident_user')
                    -> join('users','users.id','=','incident_user.user_id')
                    ->where('incident_user.incident_id','=',$request->incident_id)
                    ->select('incident_user.created_at','incident_user.updated_at','users.name')
                    ->get();
                return view('/flora_view/View_Divi_kaduru',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
            }
  
   //Ahthana
           else if($request->toxicity_name == 'Aththana'){
                  
              
                $incident = Incident::find($request->incident_id);
                
                $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                 $laboratory = $incident->laboratory;
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;     
                $management = $incident->managements()->pluck('managements.id');
               $user    = $incident->users();                                           
              $username    =  DB::table('incident_user')
                              -> join('users','users.id','=','incident_user.user_id')
                              ->where('incident_user.incident_id','=',$request->incident_id)
                              ->select('incident_user.created_at','incident_user.updated_at','users.name')
                              ->get();
               
                // dd( $username);
                return view('/flora_view/View_Aththana',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
            }  

   //Diyakaduru
            else if($request->toxicity_name == 'DiyaKaduru'){
                                      
                  $incident = Incident::find($request->incident_id);
                  $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                   $laboratory = $incident->laboratory;
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->flora;     
                  $management = $incident->managements()->pluck('managements.id');
                                                          
                  $user    = $incident->users();                                          
                  $username    =  DB::table('incident_user')
                    -> join('users','users.id','=','incident_user.user_id')
                    ->where('incident_user.incident_id','=',$request->incident_id)
                    ->select('incident_user.created_at','incident_user.updated_at','users.name')
                    ->get();
            return view('/flora_view/View_Diya_Kaduru',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
            } 

  //Endara
            else if($request->toxicity_name == 'Endaru'){
                                      
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
               $laboratory = $incident->laboratory;
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
              $username    =  DB::table('incident_user')
                  -> join('users','users.id','=','incident_user.user_id')
                  ->where('incident_user.incident_id','=',$request->incident_id)
                  ->select('incident_user.created_at','incident_user.updated_at','users.name')
                  ->get();
             return view('/flora_view/Endaru',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
          } 
  
  //Godakaduru
            else if($request->toxicity_name == 'GodaKaduru'){
                                                
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
               $laboratory = $incident->laboratory;
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
              $username    =  DB::table('incident_user')
                -> join('users','users.id','=','incident_user.user_id')
                ->where('incident_user.incident_id','=',$request->incident_id)
                ->select('incident_user.created_at','incident_user.updated_at','users.name')
                ->get();
            return view('/flora_view/Godakaduru',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
          } 
  
  //Habarala
            else if($request->toxicity_name == 'Habarala'){
                                                      
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
               $laboratory = $incident->laboratory;
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
                $username    =  DB::table('incident_user')
                      -> join('users','users.id','=','incident_user.user_id')
                      ->where('incident_user.incident_id','=',$request->incident_id)
                      ->select('incident_user.created_at','incident_user.updated_at','users.name')
                      ->get();
              return view('/flora_view/Habarala',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
           } 

  //Hondala
            else if($request->toxicity_name == 'Hondala'){
                                                                
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
               $laboratory = $incident->laboratory;
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
            $username    =  DB::table('incident_user')
                  -> join('users','users.id','=','incident_user.user_id')
                  ->where('incident_user.incident_id','=',$request->incident_id)
                  ->select('incident_user.created_at','incident_user.updated_at','users.name')
                  ->get();
              return view('/flora_view/Hondala',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
           } 

  //Kaneru 
            else if($request->toxicity_name == 'Kaneru'){
                                                                          
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
               $laboratory = $incident->laboratory;
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
              $username    =  DB::table('incident_user')
                  -> join('users','users.id','=','incident_user.user_id')
                  ->where('incident_user.incident_id','=',$request->incident_id)
                  ->select('incident_user.created_at','incident_user.updated_at','users.name')
                  ->get();
                return view('/flora_view/Kaneru',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
           } 


//Kepunkiriya 
           else if($request->toxicity_name == 'Kepunkiriya'){
                                                                            
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
               $laboratory = $incident->laboratory;
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
                $username    =  DB::table('incident_user')
                    -> join('users','users.id','=','incident_user.user_id')
                    ->where('incident_user.incident_id','=',$request->incident_id)
                    ->select('incident_user.created_at','incident_user.updated_at','users.name')
                    ->get();
                return view('/flora_view/Kepunkiriya',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
            } 

 //Niyagala
            else if($request->toxicity_name == 'Niyagala'){
                                                                                      
                $incident = Incident::find($request->incident_id);
                $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                 $laboratory = $incident->laboratory;
                $patient  = $incident->patient;
                $toxicity = $incident->toxicity->natural->flora;     
                $management = $incident->managements()->pluck('managements.id');
               $user    = $incident->users();                                          
                $username    =  DB::table('incident_user')
                  -> join('users','users.id','=','incident_user.user_id')
                  ->where('incident_user.incident_id','=',$request->incident_id)
                  ->select('incident_user.created_at','incident_user.updated_at','users.name')
                  ->get();
                return view('/flora_view/Niyagala',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
            } 
  //Olinda

            else if($request->toxicity_name == 'Olinda'){
                                                                                                
              $incident = Incident::find($request->incident_id);
              $symptoms  = $incident->symptoms()->pluck('symptoms.id');
               $laboratory = $incident->laboratory;
              $patient  = $incident->patient;
              $toxicity = $incident->toxicity->natural->flora;     
              $management = $incident->managements()->pluck('managements.id');
              $user    = $incident->users();                                          
              $username    =  DB::table('incident_user')
                  -> join('users','users.id','=','incident_user.user_id')
                  ->where('incident_user.incident_id','=',$request->incident_id)
                  ->select('incident_user.created_at','incident_user.updated_at','users.name')
                  ->get();
              return view('/flora_view/Olinda',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
             } 

  //Unknown plant poisoning

          else if($request->toxicity_name == 'Unknown plant poisoning'){
                                                                                                        
                  $incident = Incident::find($request->incident_id);
                  $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                   $laboratory = $incident->laboratory;
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->flora;     
                  $management = $incident->managements()->pluck('managements.id');
                 $user    = $incident->users();                                          
                  $username    =  DB::table('incident_user')
                      -> join('users','users.id','=','incident_user.user_id')
                      ->where('incident_user.incident_id','=',$request->incident_id)
                      ->select('incident_user.created_at','incident_user.updated_at','users.name')
                      ->get();
            return view('/flora_view/Unknown_plant_poisoning',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
        } 


        }
        if($request->toxicity_sub_group=='fauna'){
             
                  $incident = Incident::find($request->incident_id);
                  $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                   $laboratory = $incident->laboratory;
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->natural->fauna;     
                  $management = $incident->managements()->pluck('managements.id');
                  $user    = $incident->users();                                          
                  $username    =  DB::table('incident_user')
                      -> join('users','users.id','=','incident_user.user_id')
                      ->where('incident_user.incident_id','=',$request->incident_id)
                      ->select('incident_user.created_at','incident_user.updated_at','users.name')
                      ->get();
                  return view('/Fauna_View_Update/fauna_view',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
        }



       //chemical

         if($request->toxicity_sub_group=='Carbamate Insecticides'){
             
                  $incident = Incident::find($request->incident_id);
                  $symptoms  = $incident->symptoms()->pluck('symptoms.id');
                  $laboratory = $incident->laboratory;
                  $patient  = $incident->patient;
                  $toxicity = $incident->toxicity->chemical;     
                  $management = $incident->managements()->pluck('managements.id');
                  $user    = $incident->users();                                          
                  $username    =  DB::table('incident_user')
                        -> join('users','users.id','=','incident_user.user_id')
                        ->where('incident_user.incident_id','=',$request->incident_id)
                        ->select('incident_user.created_at','incident_user.updated_at','users.name')
                        ->get();
            
                  return view('/Chemical_View_Update/Chemical_View',compact('incident','patient','toxicity','symptoms','management','user','laboratory','username'));
        }
    }






}
