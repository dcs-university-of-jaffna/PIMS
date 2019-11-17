<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Flora;
use App\Prescription;
use App\IncidentSymptom;
use App\IncidentUser;
use App\IncidentManagement;
use App\Laboratory;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;

class FloraController extends Controller
{ 
    
    function FirstPage($id){
       $ray=$id;
       return view('Detail_Forms.FloraFirst',compact('ray'));
        
    }
    
    function submitFloraPHN(Request $request){
          $ray=$request->id;
          $back=0;
 
       return view('Detail_Forms.FloraForm',compact('request','back','ray'));
    }

    function submitFlora(Request $request){
        $ray=$request->id;
        $symptoms = $request->AththanaClinical;
        
         $symptoms1 = $request->CNS;
         $r=$request->CNS;
          
         if(is_null($request-> CNS)){}
         else{
             $items = DB::table('symptoms')
             ->select('name')
             ->where('id','=', "$symptoms1")->first();
        
       foreach ($items as $value) {     
       $r = $value;
    }
         }
       return view('Detail_Forms.flora_update',compact('request','ray','symptoms','symptoms1','r'));
   }
   
 function updateFlora(Request $request){
       $ray = $request->id;
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
       $toxicity->sub_group ='flora';
        
            if($ray==1)
                $toxicity->name ='Aththana'; 
            elseif($ray==2)     
                  $toxicity->name ='Divikaduru'; 
            elseif($ray==3)     
                  $toxicity->name ='DiyaKaduru'; 
            elseif($ray==4)     
                  $toxicity->name ='Endaru'; 
            elseif($ray==5)     
                  $toxicity->name ='GodaKaduru'; 
            elseif($ray==6)     
                 $toxicity->name ='Habarala'; 
            elseif($ray==7)     
                  $toxicity->name ='Hondala'; 
            elseif($ray==8)     
                 $toxicity->name ='Kaneru'; 
            elseif($ray==9)     
                $toxicity->name ='Kepunkiriya'; 
            elseif($ray==10)     
                 $toxicity->name ='Niyagala'; 
            elseif($ray==11)     
                $toxicity->name ='Olinda'; 
            elseif($ray==12)     
               $toxicity->name ='Unknown plant poisoning'; 
            
            $toxicity->toxin_id=$ray;
            $toxicity->management_group_id=1;

       $toxicity->save();
       
       
       
       
       $natural = new Natural;
       $natural->id = $toxicity->id ;
       $natural->natural_type = 'flora';
       $natural->save(); 
       
       
       $flora = new Flora;
       $flora->id=$natural->id;
       $flora->plant_part = $request-> plant_part;
       $flora->circumstance = $request-> circumstance;
       $flora->poisoning_mode  = $request-> poisoning_mode; 
       $flora->amount  = $request-> amount; 
       
       if(is_null($request-> Oplant_part)){}
       else{
           $flora->plant_part = $request-> Oplant_part; 
       }
      
       if(is_null($request-> Ocircumstance)){}
       else{
           $flora->circumstance = $request-> Ocircumstance;
       }
    
       if(is_null($request->Opoisoning_mode )){}
       else{    
          $flora->poisoning_mode  = $request-> Opoisoning_mode; 
       }
    
               
       $flora->antidote = $request->antidote; 
       $flora->activated_chracol_doses = $request->activated_chracol_doses; 
       $flora->save();
       
      
       
       $incident=new Incident;
         $incident->area=$request->area; 
          if(is_null($request->Oarea)){}
           else{   
         $incident->area=$request->Oarea; 
       }
      
       $incident->patient_id= $patient->id;
       $incident->toxicity_id=$toxicity->id;
       $incident->date=$request->date;
       $incident->time=$request->time;
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
      
        	
      
  $symptom = $request->Clinical;

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
        
       $management1 = $request->antidote_given;
       if (is_null($management1)){
         
        }
        else{
         $incident_management=new incident_management;
                $incident_management->management_id=$management1;
                $incident_management->incident_id = $incident->id;
                $incident_management->save();    
        }
        
        
        $incident_user=new IncidentUser ;
        $incident_user->user_id = Auth::id();
        $incident_user->incident_id = $incident->id;
        $incident_user->save();

      $back=1;
      
       return view('Detail_Forms.saveForm');
 }
   
}  

