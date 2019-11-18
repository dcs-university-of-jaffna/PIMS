<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;


class FrontController extends Controller
{

    public function show_save_record()
    {
        $data = incident::with('Patient')
                ->where('is_submited',0)->latest()->paginate(15);
         //dd( $data);
        return view('home',compact('data'));

    }
}




