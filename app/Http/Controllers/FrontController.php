<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{

    public function show_save_record()
    {
       $data = DB::table('incidents')
               ->join('patients','patients.id','=','incidents.patient_id')
               ->join('toxicities','toxicities.id','=','incidents.toxicity_id')
               ->where('incidents.is_submited','=',0)
               ->select('incidents.id','phn','area','patients.name')
               ->get();
       // dd($data);
        return view('home',compact('data'));

    }
}

