<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function separate($id)
    {
        $data=DB::table('incidents')
            ->where('incidents.id','=',$id) 
            ->join('toxicities','incidents.toxicity_id','=','toxicities.id')
            ->select('incidents.id','patient_id','toxicity_id','main_group','sub_group')
            ->get();
      
            
            
        foreach($data as $data1) 
        {
            if(($data1->main_group)=='naturals' && ($data1->sub_group)=='floras') 
            {
                
            } 
            if(($data1->main_group)=='naturals' && ($data1->sub_group)=='faunas') 
            {
                
            }
            if(($data1->main_group)=='naturals' && ($data1->sub_group)=='microbials') 
            {
               
            } 
            if(($data1->main_group)=='naturals' && ($data1->sub_group)=='fungals') 
            {
               
            } 
        } 
    }

    
}
