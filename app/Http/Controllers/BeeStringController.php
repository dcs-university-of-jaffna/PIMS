<?php

namespace App\Http\Controllers;
use App\patient;
use App\ bee_sting;
use Illuminate\Http\Request;

class BeeStringController extends Controller
{
   function submit(Request $request){
       $patient = new patient;
       $patient->PHN = $request->PHN;
       $patient->save();
       
       $bee_sting = new bee_sting;
       $bee_sting->Number_of_Stings = $request->Number_of_Sting;
       $bee_sting->Sting_Time=$request->Sting_Time;
       $bee_sting->Place_of_Sting=$request->Place_of_StingSS;
       $bee_sting->Place_of_Sting=$request->Place_of_Sting;
       $bee_sting->Cirmustance=$request->Cirmustance;
       $bee_sting->anaphylaxis_Features=$request->anaphylaxis_Features;
       $bee_sting->save();
       	
       return back();
      
   }
}
