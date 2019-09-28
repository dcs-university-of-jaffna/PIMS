<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_record_controller_phn_search extends Controller
{
    
    public function view_record(Request $request){
      
      /*show record route pass the incident_id,toxicity_id,toxicity_name,toxicity_sub_group
         pass the value */

        if($request->toxicity_sub_group=='flora'){
            if($request->toxicity_name == 'Divikaduru'){
              //  dd($request->incident_id);
                return view('View_Divi_kaduru');
            }
        }
    }
}
