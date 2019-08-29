<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{

    public function show_save_record()
    {
       $data = DB::table('incidents')
               ->where('is_submited','=',0)
               ->get();
        dd($data);
        return view('home');

    }
}

