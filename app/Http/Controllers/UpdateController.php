<?php

namespace App\Http\Controllers;
use App\Incident;
use App\Toxicity;
use App\Natural;
use App\Prescription;
use App\Patient;
use App\Flora;
use App\IncidentSymptom;
use App\Laboratory;
use App\Management;
use App\IncidentUser;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;


class UpdateController extends Controller
{
    public function submitFlora(Request $request){
         
       // dd($request);
       //Incident table update
        $data = Incident::find($request->recordid);
        $data->date = $request->date;
        $data->time = $request->time;
        if($request->region == 'others'){
          $data->area = $request->area_of_others;
        }
        else{
            $data->area = $request->region;
        }
        $data->management_others = $request->managements_others;
        $data->comments          = $request->comments;
        $data->symptom_others    = $request->clinicals_others;
        if($request->save == "save"){
            $data->is_submited = 0;
        }
        else{
            $data->is_submited = 1;
        }
        $data->save();

        //patient update
      $patientdata = $data->patient;
      $patientdata->phn = $request->phn;
      $patientdata->nic  = $request->nic;
      $patientdata->fname = $request->firstname;
      $patientdata->lname = $request->lastname;
      $patientdata->bdate = $request->birthday;
      $patientdata->address  = $request->address;
      $patientdata->contact  = $request->contact;
      $patientdata->gender  = $request->gender;
      $patientdata->save();

     //laboratary details 
      $laboratarydata = $data->laboratory;
      $laboratarydata->comments = $request->laboratory;
      $laboratarydata->save();
      
    //flora table update
        $floradata = $data->toxicity->natural->Flora;
        if($request->place_of_sting == 'others'){
        $floradata->plant_part   = $request->other_plant_part;
        }
        else{
            $floradata->plant_part   = $request->plant_part;
        }
        $floradata->circumstance = $request->circumstance;
        if($floradata->poisoning_mode == 'others'){
            $floradata->poisoning_mode = $request->area_of_others;
        }
        else{
           $floradata->poisoning_mode = $request->poisoning_mode;
        }
        

        $floradata->amount  = $request->amount;
        $floradata->activated_chracol_doses = $request->activated_chracol_doses;
        $floradata->antidote = $request->antidote; 

        $floradata->save(); 
        
        //who is the update the record
        $update_doctor = new IncidentUser ;
        $update_doctor->user_id = auth()->user()->id;
        $update_doctor->incident_id = $request->recordid;
        $update_doctor->save();
        
        //managements update
          $data->managements()->sync($request->management);

        //symptom update
        $data->symptoms()->sync($request->Clinical); 
        return redirect('home'); 
         
    }
    public function submitFauna(Request $request){
        
        // dd($request);
       //Incident table update
        $data = Incident::find($request->recordid);
        $data->date = $request->date;
        $data->time = $request->time;
        if($request->region == 'others'){
          $data->area = $request->area_of_others;
        }
        else{
            $data->area = $request->region;
        }
        
        $data->management_others = $request->managements_others;
        $data->comments          = $request->comments;
        $data->symptom_others    = $request->clinicals_others;
        if($request->save == "save"){
            $data->is_submited = 0;
        }
        else{
            $data->is_submited = 1;
        }
        $data->save();

     //laboratary details 
      $laboratarydata = $data->laboratory;
      $laboratarydata->comments = $request->laboratory;
      $laboratarydata->save();

      //patient update
      $patientdata = $data->patient;
      $patientdata->phn = $request->phn;
      $patientdata->nic  = $request->nic;
      $patientdata->fname = $request->firstname;
      $patientdata->lname = $request->lastname;
      $patientdata->bdate = $request->birthday;
      $patientdata->address  = $request->address;
      $patientdata->contact  = $request->contact;
      $patientdata->gender  = $request->gender;
      $patientdata->save();

    //fauna table update
        $faunadata = $data->toxicity->natural->Fauna;
        $faunadata->number_of_stings   = $request->number_of_stings;
        if($request->place_of_sting == 'others'){
           $faunadata->place_of_sting = $request->place_of_sting_others;
        }
        else{
            $faunadata->place_of_sting = $request->place_of_sting;
        }
        if($request->sting_site == 'others'){
             $faunadata->sting_site   = $request->sting_site_others;
        }
        else{
            $faunadata->sting_site   = $request->sting_site;
        }
        
       
        $faunadata->circumstance = $request->circumstance;
        $faunadata->avs_vials    = $request->avs_vials;

        $faunadata->save(); 
        
        //who is the update the record
        $update_doctor = new IncidentUser ;
        $update_doctor->user_id = auth()->user()->id;
        $update_doctor->incident_id = $request->recordid;
        $update_doctor->save();
        
        //managements update
          $data->managements()->sync($request->management);

        //symptom update
        $data->symptoms()->sync($request->Clinical); 
        return redirect('home'); 

    }
}
