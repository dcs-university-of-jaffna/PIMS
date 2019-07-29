<?php
namespace App\Http\Controllers;
use App\record;
use App\bee_sting;
use App\site;
use App\clinical;
use App\management;
use Illuminate\Http\Request;

class BeeStringController extends Controller
{
   function submit(Request $request){
       $record = new record;
       $record->PHN = $request->PHN;
       $record->instance_date = $request->instance_date;
       $record->instance_area = $request->instance_area;
       $record->save();
       	
       
       $bee_sting = new bee_sting;
       $bee_sting->sting_time=$request->Sting_Time;
       $bee_sting->number_of_stings=$request->number_of_stings;
       $bee_sting->cirmustance=$request->Cirmustance;
       $bee_sting->place_of_sting=$request->Place_of_Sting;
       $bee_sting->other_places=$request-> other_places;
    
       $bee_sting->save();
       
       $site = new site;
       $site->head_neck=$request->head_neck;
       $site->upper_limb=$request->upper_limb;
       $site->chest=$request->chest;
       $site->lower_limb=$request->lower_limb;
       $site->abdomen=$request->abdomen;
       $site->sites_others=$request->sites_others;
       $site->save();
      
       $clinical = new clinical;
       $clinical->anaphylaxis=$request->anaphylaxis;
       $clinical->burning_pain=$request->burning_pain;
       $clinical->pruritus=$request->pruritus;
       $clinical->vomiting=$request->vomiting;
       $clinical->bronchospasm=$request->bronchospasm;
       $clinical->renal_failure=$request->renal_failure;
       $clinical->tightness_of_chest=$request->tightness_of_chest;
       $clinical->urticaria=$request->urticaria;
       $clinical->laryngeal_odema=$request->laryngeal_odema;
       $clinical->rhabdomyolysis=$request->rhabdomyolysis;
       $clinical->swelling=$request->swelling;
       $clinical->nausea=$request->nausea;
       $clinical->hypotension=$request->hypotension;
       $clinical->oliguria=$request->oliguria;
       $clinical->malaise=$request->malaise;
       $clinical->facial_odema=$request->facial_odema;
       $clinical->seizure=$request->seizure;
       $clinical->clinicals_others=$request->clinicals_others;
       $clinical->save();
       
       $management = new management;
       $management->managements_others=$request->managements_others;
       $management->ice_packs=$request->ice_packs;
       $management->antihistamine=$request->antihistamine;
       $management->adrenaline=$request->adrenaline;
       $management->icu_care=$request->icu_care;
       $management->steroids=$request->steroids;
       $management->renal_rep_theraphy=$request->renal_rep_theraphy;
       $management->invasive_ventilation=$request->invasive_ventilation;
       $management->stinger_scrapped=$request->stinger_scrapped;
       
       $management->save();
       return back();
      
   }
}
