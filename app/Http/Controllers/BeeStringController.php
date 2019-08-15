<?php
namespace App\Http\Controllers;
use App\patient;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Flora;

use Illuminate\Http\Request;
use DB;

class BeeStringController extends Controller
{
   function submit(Request $request){
     
       $toxicity = new Toxicity;
       $toxicity->main_group ='natural';
       $toxicity->sub_group ='flora';
       $toxicity->name ='aththana';   
       $toxicity->save();
       
       $patient = new patient;
       $patient->phn = $request->PHN;
       $patient->save();
       
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
       
       return back();
      
   }
}
