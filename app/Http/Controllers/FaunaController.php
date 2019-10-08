<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Fauna;
use App\Prescription;
use App\IncidentSymptom;
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
       $patient = new Patient;
       $patient->phn = $request->PHN;
       $back=0;
       $patient->save();
       $patient1=patient::pluck('phn')->last();
       $patient2=patient::pluck('id')->last();
       return view('Detail_Forms.FaunaForm',compact('patient1','patient2','back','ray'));
    }

    function submitFauna(Request $request){
       $ray=$request->id;
       $patient1=Patient::pluck('phn')->last();
       $patient2=Patient::pluck('id')->last(); 
       
       $toxicity = new Toxicity;
       $toxicity->main_group ='natural';
       $toxicity->sub_group ='fauna';
       
            if($ray==1)
                $toxicity->name ='Bee, Wasp, Hornet Stings'; 
            elseif($ray==2)     
                  $toxicity->name ='Black Widow Spider'; 
            elseif($ray==3)     
                  $toxicity->name ='Blister Beetle ingestion'; 
            elseif($ray==4)     
                  $toxicity->name ='Centipede Bite'; 
            elseif($ray==5)     
                  $toxicity->name ='Jelly Fish'; 
            elseif($ray==6)     
                 $toxicity->name ='Scorpion Bite'; 
            elseif($ray==7)     
                  $toxicity->name ='Snake Bite'; 
            elseif($ray==8)     
                 $toxicity->name ='Turtle Flesh Poisoning'; 
            elseif($ray==9)     
                $toxicity->name ='Unknown Bite'; 
       
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
       $incident->comments=$request->comments;
       
       if(Input::get('submit') == 'submit') {
            $incident->is_submited=1;   
       }
       
        $incident->save();
        
      $laboratory=new  Laboratory;
      $laboratory->incident_id = $incident->id;
      $laboratory->comments = $request->Lab_Comments; 
      $laboratory->save();
      
      
       $fauna = new Fauna;
       $fauna->id=$natural->id;
       $fauna->number_of_stings= $request->number_of_stings;
       $fauna->place_of_sting= $request->place_of_sting;
       
       if(is_null($request->place_of_sting)){
       $fauna->place_of_sting= $request->place_of_sting1;
       }
       
       $fauna-> sting_site= $request->sting_site;
       if(is_null($request->sting_site)){
       $fauna-> sting_site= $request->sting_site1;
       }
       
       $fauna->circumstance= $request->circumstance;
       $fauna->save();
       
       
        $back=1;

        return view('Detail_Forms.FaunaForm',compact('patient1','patient2','back','ray'));
    }
   
 
   
}  




