<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Microbial extends Model
{
    /**
     * Microbial is a subclass of Natural
     */
    public function natural()
    {
        return $this->belongsTo('App\Natural', 'id');
    }
}

