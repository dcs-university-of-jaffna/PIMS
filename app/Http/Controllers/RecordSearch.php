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
    
    $data =   DB::table('doctor_records')
               ->join('records','records.records_id','=','doctor_records.records_id')
               ->join('users','users.id','=','doctor_records.doctors_id')
               ->where('records.phn','=',$phn)
               ->where('records.is_submited','=',0)
               ->select('records.toxicity_type','records.instance_date','records.instance_area','users.name')
               ->get();
    
    
    $submitdata =   DB::table('doctor_records')
               ->join('records','records.records_id','=','doctor_records.records_id')
               ->join('users','users.id','=','doctor_records.doctors_id')
               ->where('records.phn','=',$phn)
               ->where('records.is_submited','=',1)
               ->select('records.toxicity_type','records.instance_date','records.instance_area','users.name')
               ->get();
           
       

    return view('record',compact('data','submitdata'));

     
   }
}
