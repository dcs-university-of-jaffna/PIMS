<?php

namespace App\Http\Controllers;

use App\Incident;
use DB;

class FrontController extends Controller
{

    public function show_save_record()
    {
        $incidents = Incident::where('is_submited', 0)->latest()->paginate(10);
        return view('home',compact('incidents'));
    }
}

