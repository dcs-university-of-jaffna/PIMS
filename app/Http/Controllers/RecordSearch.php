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
