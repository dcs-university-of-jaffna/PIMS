<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
     
    
    public function show_save_record(){

       


          $data = DB::table('doctor_records')
                  ->join('users','users.id','=','doctor_records.doctors_id')
                  ->join('records','records.records_id','=','doctor_records.records_id')
                  ->where('records.is_submited','=',0)
                  ->latest('doctor_records.updated_at')->distinct()
                  ->select('records.toxicity_type','records.phn','records.instance_date','records.instance_area','users.name')
                  ->get();

        return view('home',compact('data'));

    }


}
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{

    public function show_save_record()
    {
       /* $data = DB::table('doctor_records')
            ->join('users', 'users.id', '=', 'doctor_records.doctors_id')
            ->join('records', 'records.records_id', '=', 'doctor_records.records_id')
            ->where('records.is_submited', '=', 0)
            ->latest('doctor_records.updated_at')
            ->select('records.toxicity_type', 'records.phn', 'records.instance_date', 'records.instance_area')
            ->get();*/

        return view('home');

    }
}
>>>>>>> 879c42ea35b9f3185e530a3d95753d39629835d0
