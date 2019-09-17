<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;

class RecordSearch extends Controller
{
   public function phnsearch(Request $request){
     

    $phn = $request->phn;
    
    $data = DB::table('incidents')
            ->join('patients','patients.id','=','incidents.patient_id')
            ->join('toxicities','toxicities.id','=','incidents.toxicity_id')
            //->join('prescription','prescription.incident_id','=','incidents.')
            ->where('patients.phn','=',$phn)  
            ->where('is_submited','=',0) 
            ->get();

    $submitdata = DB::table('incidents')
            ->join('patients','patients.id','=','incidents.patient_id')
            ->join('toxicities','toxicities.id','=','incidents.toxicity_id')
            //->join('prescription','prescription.incident_id','=','incidents.')
            ->where('patients.phn','=',$phn)  
            ->where('is_submited','=',1) 
            ->get();

    return view('record',compact('data','submitdata','phn'));
   }


}
