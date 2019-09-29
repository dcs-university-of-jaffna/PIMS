<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chemical extends Model
{
    /**
     * Chemical is a subclass of Toxicity
     *
     * @return belongsTo()->result
     */
    public function toxicity()
    {
        return $this->belongsTo('App\Toxicity');
    }

    public function Symptom()
    {
        return $this->hasMany('App\Symptom');
    }

    public function Management()
    {
        return $this->hasMany('App\Management');
    }
}

