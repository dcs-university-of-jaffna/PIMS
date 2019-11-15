<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Fauna;
use App\Prescription;
use App\IncidentSymptom;
use App\IncidentUser;
use App\IncidentManagement;
use App\Laboratory;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class FaunaController extends Controller
{ 
    
    function FirstPage($id){
       $ray=$id;
       return view('Detail_Forms.FaunaFirst',compact('ray'));
        
    }
    
    function submitFaunaPHN(Request $request){
          $ray=$request->id;
          $back=0;
 
       return view('Detail_Forms.FaunaForm',compact('request','back','ray'));
    }

    function submitFauna(Request $request){
       $ray=$request->id;
       
       $patient = new Patient;
       $patient->phn=$request->PHN;	
       $patient->nic=$request->nic ;	
       $patient->fname=$request->Fname; 	
       $patient-> lname=$request->Sname ;	
       $patient->bdate=$request->Bdate; 
       $patient->address=$request->address ;
       $patient->contact=$request->Cno ;
       $patient->gender=$request->gender;	
       $patient->save();
        
       
       
       $toxicity = new Toxicity;
       $toxicity->main_group ='natural';
       $toxicity->sub_group ='fauna';
        
            if($ray==13)
                $toxicity->name ='Bee, Wasp, Hornet Stings'; 
            elseif($ray==14)     
                  $toxicity->name ='Black Widow Spider'; 
            elseif($ray==21)     
                  $toxicity->name ='Blister Beetle ingestion'; 
            elseif($ray==15)     
                  $toxicity->name ='Centipede Bite'; 
            elseif($ray==16)     
                  $toxicity->name ='Jelly Fish'; 
            elseif($ray==17)     
                 $toxicity->name ='Scorpion Bite'; 
            elseif($ray==18)     
                  $toxicity->name ='Snake Bite'; 
            elseif($ray==19)     
                 $toxicity->name ='Turtle Flesh Poisoning'; 
            elseif($ray==20)     
                $toxicity->name ='Unknown Bite'; 
       
            
            $toxicity->toxin_id=$ray;
            $toxicity->management_group_id=2;

       $toxicity->save();
       
       
       
       
       $natural = new Natural;
       $natural->id = $toxicity->id ;
       $natural->natural_type = 'fauna';
       $natural->save(); 
       
       
       $fauna = new Fauna;
       $fauna->id=$natural->id;
       $fauna->number_of_stings= $request->number_of_stings;
       $fauna->place_of_sting= $request->place_of_sting;
       $fauna->avs_vials= $request->AVS;
       
       if(is_null($request->place_of_sting)){
       $fauna->place_of_sting= $request->place_of_sting1;
       }
       
       $fauna-> sting_site= $request->sting_site;
       if(is_null($request->sting_site)){
       $fauna-> sting_site= $request->sting_site1;
       }
       
       $fauna->circumstance= $request->circumstance;
       $fauna->save();

       
      
       
       $incident=new Incident;
       $incident->patient_id= $patient->id;
       $incident->toxicity_id=$toxicity->id;
       $incident->date=$request->date;
       $incident->time=$request->time;
       $incident->area=$request->area; 
       $incident->symptom_others=$request->clinicals_others;
       $incident->management_others=$request->managements_others;
       $incident->comments=$request->comments;
       
       if(Input::get('submit') == 'submit') {
            $incident->is_submited=1;   
       }
       
       $incident->save();
         
    
       
      $laboratory=new  Laboratory;
      $laboratory->incident_id = $incident->id;
      $laboratory->comments = $request->Lab_Comments; 
      $laboratory->incident_id = $incident->id;
      $laboratory->save();
      
        	
      
  $symptom = $request->AththanaClinical;
        if (is_null($symptom)){
            
        }
        else{
            foreach ($symptom as $value){
                $incidentSymptom=new IncidentSymptom;
                $incidentSymptom->symptom_id=$value;
                $incidentSymptom->incident_id = $incident->id;
                $incidentSymptom->save();
            }
       }
      
      
        $management =$request->management;
        if (is_null($management)){
            
        }
        else{
             foreach ($management as $value){
                $incident_management=new IncidentManagement ;
                $incident_management->management_id=$value;
                $incident_management->incident_id = $incident->id;
                $incident_management->save();
            }
       }
        
    
        
        $incident_user=new IncidentUser ;
        $incident_user->user_id = Auth::id();
        $incident_user->incident_id = $incident->id;

      $back=1;

      return view('Detail_Forms.saveForm');
   }
   
 
   
}  

