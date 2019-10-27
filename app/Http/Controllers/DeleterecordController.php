<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleterecordController extends Controller
{
    public function deleterecord(Request $requset){
        dd($requset->incident_id);
    }
}
