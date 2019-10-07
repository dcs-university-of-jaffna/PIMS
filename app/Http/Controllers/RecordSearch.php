<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\Patient;
use Illuminate\Database\Eloquent\Builder;


class RecordSearch extends Controller
{
   public function phnsearch(Request $request){
   
    $phn = $request->phn;
    //serch save data using phn
    $savedata = Incident::
              leftJoin('patients','patients.id','=','incidents.patient_id')
            ->join('toxicities','toxicities.id','=','incidents.toxicity_id')
            ->where('patients.phn','=', $phn)
            ->where('incidents.is_submited','=',0)
            ->get();
   // dd($data);
   //search submit data using phn
   $submitdata = Incident::
              leftJoin('patients','patients.id','=','incidents.patient_id')
            ->join('toxicities','toxicities.id','=','incidents.toxicity_id')
            ->where('patients.phn','=', $phn)
            ->where('incidents.is_submited','=',1)
            ->get();

    return view('record',compact('savedata','phn','submitdata'));
   }


}
