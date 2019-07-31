<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bee_sting extends Model
{
     protected $fillable = ['number_of_stings','sting_time','cirmustance','instance_area',
         'place_of_sting','other_places', 'abdomen','comments'];
}
