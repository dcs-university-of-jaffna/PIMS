<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class site extends Model
{
    protected $fillable = ['head_neck','upper_limb','chest','lower_limb','abdomen','sites_others']; 
}
