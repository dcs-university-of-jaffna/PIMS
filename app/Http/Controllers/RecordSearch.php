
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


      $data = DB::table('records')
            ->join('bee_stings','bee_stings.bee_stings_id','=','records.toxicity_id')
            ->join('clinicals','clinicals.clinicals_id','=','records.clinicals_id')
            ->join('managements','managements.managements_id','=','records.managements_id')
            ->join('sites','sites.sites_id','=','records.sites_id')
            ->where('records.records_id','=',$record_id)
            ->get();
      
       return view('bee_String_view',compact('data'));
   }







}

