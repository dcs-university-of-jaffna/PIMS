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
               ->select('records.records_id','records.phn','records.toxicity_type','records.instance_date','records.instance_area','users.name')
               ->get();

    
    $submitdata =   DB::table('doctor_records')
               ->join('records','records.records_id','=','doctor_records.records_id')
               ->join('users','users.id','=','doctor_records.doctors_id')
               ->where('records.phn','=',$phn)
               ->where('records.is_submited','=',1)
               ->select('records.records_id','records.phn','records.toxicity_type','records.instance_date','records.instance_area','users.name')
               ->get();
            


    return view('record',compact('data','submitdata'));

     
   }

   
   public function show_bee_sting_details($record_id,$phn){

      $table = DB::table('records')
               ->where('record_id','=',$record_id)
               ->select('toxicity_type')
               ->get();
       dd($table);

      // $data = DB::table('records')
      //       ->join('bee_stings','bee_stings.bee_stings_id','=','records')

   }







}
