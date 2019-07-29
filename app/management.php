<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class management extends Model
{
      protected $fillable = ['managements_others','ice_packs','antihistamine','adrenaline','icu_care',
          'steroids','renal_rep_theraphy','stinger_scrapped','invasive_ventilation'];
}
