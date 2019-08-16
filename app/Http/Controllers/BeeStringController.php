<?php
namespace App\Http\Controllers;
use App\patient;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Flora;
use App\Symptom;
use App\Prescription;
use App\IncidentSymptom;
use App\Management;
use Auth;
use Illuminate\Http\Request;
use DB;


class BeeStringController extends Controller
{
    
   function submit(Request $request){
  
       $patient = new patient;
       $patient->phn = $request->PHN;
       $patient->save();
       
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
       $incident->patient_id=$patient->id;
       $incident->toxicity_id=$toxicity->id;
       $incident->date=$request->date;
       $incident->time=$request->time;
       $incident->area=$request->area; 
       $incident->symptom_others=$request->clinicals_others;
       $incident->management_others=$request->managements_others;
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
                $r =Symptom::select('id')->where('name',$value)->first();
                $incidentSymptom->symptom_id=$r->id;
                $incidentSymptom->incident_id = $incident->id;
                $incidentSymptom->save();
            }
       }
      
       
        $symptom1 = $request->CNSeffects;
        if (is_null($symptom)){
            
        }
        else{
            $incidentSymptom=new IncidentSymptom;
            $r =Symptom::select('id')->where('name',$symptom1)->first();
            $incidentSymptom->symptom_id=$r->id;
            $incidentSymptom->incident_id = $incident->id;
            $incidentSymptom->save();
        }
        
        
        $management =$request->management;
        if (is_null($management)){
            
        }
        else{
            foreach ($management as $value){
                $prescription=new Prescription;
                $r =Management::select('id')->where('name',$value)->first();
                $prescription->management_id=$r->id;
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
            $r =Management::select('id')->where('name',$management1)->first();
                $prescription->management_id=$r->id;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        }
       
        $management2 = $request->charcoal;
        if (is_null($management2)){
         
        }
        else{
         $prescription=new Prescription;
            $r =Management::select('id')->where('name',$management2)->first();
                $prescription->management_id=$r->id;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        }
       $management3 = $request->Gastric_aspiration;
         if (is_null($management3)){
         
        }
        else{
         $prescription=new Prescription;
            $r =Management::select('id')->where('name',$management3)->first();
                $prescription->management_id=$r->id;
                $prescription->incident_id = $incident->id;
                $prescription->doctor_id = Auth::id();
                $prescription->save();    
        } 
        
       
      return back();
   }
}
