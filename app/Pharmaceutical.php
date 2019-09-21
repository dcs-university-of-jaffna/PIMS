<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmaceutical extends Model
{
    /**
     * Pharmaceutical is a subclass of Toxicity
     */
    public function toxicity()
    {
        return $this->belongsTo('App\Toxicity','id');
    }
}

