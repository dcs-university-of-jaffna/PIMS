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
      
    }
   
 
   
}  




