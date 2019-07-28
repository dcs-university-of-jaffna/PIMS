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
    
    $data =   DB::table('Records')
               ->join('users','users.id','=','Records.Doctor_ID')
               ->where('Records.PHN','=',$phn)
               ->select('Records.Toxicity_Type','Records.Instance_Date','Records.Instance_Area','users.name')
               ->get();
   
  $patient = DB::table('Patients')
            ->where('PHN','=',$phn)
             ->select('PHN','Patient_Name')
             ->get();
            

    return view('record',compact('data','patient'));

     
   }
}
