<?php
namespace App\Http\Controllers;
use App\patient;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Flora;
use App\Symptom;
use App\IncidentSymptom;
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
       $incident->save();
       
       $flora = new Flora;
       $flora->id=$natural->id;   
       $flora->plant_part = $request-> plant_part;
       $flora->amount = $request-> amount;
       $flora->circumstance = $request-> circumstance;
       $flora->poisoning_mode  = $request-> poisoning_mode;     
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
      return back();
   }
}
