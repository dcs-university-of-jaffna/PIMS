<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;


class FrontController extends Controller
{

    public function show_save_record()
    {
        $data = incident::where('is_submited',0)->latest()->paginate(15);
        return view('home',compact('data'));

    }
}




