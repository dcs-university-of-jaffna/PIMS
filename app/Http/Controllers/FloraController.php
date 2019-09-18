<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Flora;
use App\Prescription;
use App\IncidentSymptom;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class FloraController extends Controller
{ 
    
    //------------------------------Aththana----------------------------------------------------------
    
    function submitAththanaPHN(Request $request){
       $patient = new Patient;
       $patient->phn = $request->PHN;
       $back=0;
       $patient->save();
       $patient1=patient::pluck('phn')->last();
       $patient2=patient::pluck('id')->last();
       return view('Detail_Forms.AththanaForm',compact('patient1','patient2','back'));
    }

   function submitAththana(Request $request){
       $patient1=Patient::pluck('phn')->last();
       $patient2=Patient::pluck('id')->last();
       
       $toxicity = new Toxicity;
       $toxicity->main_group ='natural';
       $toxicity->sub_group ='flora';
       $toxicity->name ='aththana';   
       $toxicity->save();
       
       
       $natural = new Natural;
       $natural->id = $toxicity->id ;
       $natural->natural_type = 'flora';
       $natural->save(); 
       
       
       $incident=new Incident;
       $incident->patient_id=$request->PHNid;
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
         
       
       $flora = new Flora;
       $flora->id=$natural->id;   
       $flora->plant_part = $request-> plant_part;
       $flora->amount = $request-> amount;
       $flora->circumstance = $request-> circumstance;
       $flora->poisoning_mode  = $request-> poisoning_mode;     
       $flora->antidote = $request->antidote; 
       $flora->activated_chracol_doses = $request->activated_chracol_doses; 
       $flora->save();
        	
      
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
      
       
        $symptom1 = $request->CNSeffects;
        if (is_null($symptom1)){
            
        }
        else{
            $incidentSymptom=new IncidentSymptom;
            $incidentSymptom->symptom_id=$symptom1;
            $incidentSymptom->incident_id = $incident->id;
            $incidentSymptom->save();
        }
        
          $management =$request->management;
        if (is_null($management)){
            
        }
        else{
            foreach ($management as $value){
                $prescription=new Prescription;
                $prescription->management_id=$value;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();
            }
       }
        
       $management1 = $request->antidote_given;
       if (is_null($management1)){
         
        }
        else{
         $prescription=new Prescription;
                $prescription->management_id=$management1;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        }
       
        $management2 = $request->charcoal;
        if (is_null($management2)){
         
        }
        else{
                $prescription=new Prescription;
                $prescription->management_id=$management2;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        }
       $management3 = $request->Gastric_aspiration;
         if (is_null($management3)){
         
        }
        else{
                $prescription=new Prescription;
                $prescription->management_id= $management3;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        } 
      $back=1;


      return view('Detail_Forms.AththanaForm',compact('patient1','patient2','back'));
   }
   
   
   //--------------------------------Divi Kaduru------------------------------------------------------ 
   
   
   function submitDivikaduruPHN(Request $request){
       $patient = new Patient;
       $patient->phn = $request->PHN;
       $back=0;
       $patient->save();
       $patient1=patient::pluck('phn')->last();
       $patient2=patient::pluck('id')->last();
       return view('Detail_Forms.DivikaduruForm',compact('patient1','patient2','back'));
    }

   function submitDivikaduru(Request $request){
       $patient1=Patient::pluck('phn')->last();
       $patient2=Patient::pluck('id')->last();
       
       $toxicity = new Toxicity;
       $toxicity->main_group ='natural';
       $toxicity->sub_group ='flora';
       $toxicity->name ='divi kaduru';   
       $toxicity->save();
       
       
       $natural = new Natural;
       $natural->id = $toxicity->id ;
       $natural->natural_type = 'flora';
       $natural->save(); 
       
       
       $incident=new Incident;
       $incident->patient_id=$request->PHNid;
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
         
       
       $flora = new Flora;
       $flora->id=$natural->id;   
       $flora->plant_part = $request-> plant_part;
       $flora->amount = $request-> amount;
       $flora->circumstance = $request-> circumstance;
       $flora->poisoning_mode  = $request-> poisoning_mode;     
       $flora->antidote = $request->antidote; 
       $flora->activated_chracol_doses = $request->activated_chracol_doses; 
       $flora->save();
        	
      
        $symptom = $request->DivikaduruClinical;
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
                $prescription=new Prescription;
                $prescription->management_id=$value;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();
            }
       }
        
       $management1 = $request->antidote_given;
       if (is_null($management1)){
         
        }
        else{
         $prescription=new Prescription;
                $prescription->management_id=$management1;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        }
       
        $management2 = $request->charcoal;
        if (is_null($management2)){
         
        }
        else{
                $prescription=new Prescription;
                $prescription->management_id=$management2;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        }
       $management3 = $request->Gastric_aspiration;
         if (is_null($management3)){
         
        }
        else{
                $prescription=new Prescription;
                $prescription->management_id= $management3;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        } 
      $back=1;
      return view('Detail_Forms.DivikaduruForm',compact('patient1','patient2','back'));
   }


   //--------------------------------Diya kaduru------------------------------------------------------ 
   
   
   function submitDiyakaduruPHN(Request $request){
       $patient = new Patient;
       $patient->phn = $request->PHN;
       $back=0;
       $patient->save();
       $patient1=patient::pluck('phn')->last();
       $patient2=patient::pluck('id')->last();
       return view('Detail_Forms.DiyakaduruForm',compact('patient1','patient2','back'));
    }

   function submitDiyakaduru(Request $request){
       $patient1=Patient::pluck('phn')->last();
       $patient2=Patient::pluck('id')->last();
       
       $toxicity = new Toxicity;
       $toxicity->main_group ='natural';
       $toxicity->sub_group ='flora';
       $toxicity->name ='diya kaduru';   
       $toxicity->save();
       
       
       $natural = new Natural;
       $natural->id = $toxicity->id ;
       $natural->natural_type = 'flora';
       $natural->save(); 
       
       
       $incident=new Incident;
       $incident->patient_id=$request->PHNid;
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
         
       
       $flora = new Flora;
       $flora->id=$natural->id;   
       $flora->plant_part = $request-> plant_part;
       $flora->amount = $request-> amount;
       $flora->circumstance = $request-> circumstance;
       $flora->poisoning_mode  = $request-> poisoning_mode;     
       $flora->antidote = $request->antidote; 
       $flora->activated_chracol_doses = $request->activated_chracol_doses; 
       $flora->save();
        	
      
        $symptom = $request->DiyakaduruClinical;
     
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
                $prescription=new Prescription;
                $prescription->management_id=$value;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();
            }
       }
        
       $management1 = $request->antidote_given;
       if (is_null($management1)){
         
        }
        else{
         $prescription=new Prescription;
                $prescription->management_id=$management1;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        }
       
        $management2 = $request->charcoal;
        if (is_null($management2)){
         
        }
        else{
                $prescription=new Prescription;
                $prescription->management_id=$management2;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        }
       $management3 = $request->Gastric_aspiration;
         if (is_null($management3)){
         
        }
        else{
                $prescription=new Prescription;
                $prescription->management_id= $management3;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        } 
      $back=1;
      return view('Detail_Forms.DiyakaduruForm',compact('patient1','patient2','back'));
   }
}

