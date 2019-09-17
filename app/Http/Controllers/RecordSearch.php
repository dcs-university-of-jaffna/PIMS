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
            ->where('patients.phn','=',$phn)   
            ->get();
         //   dd($data);
    return view('record',compact('data'));
   }


}
