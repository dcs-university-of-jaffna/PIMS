<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fauna extends Model
{
    /**
     * Fauna is a subclass of Natural
     *
     * @return belongsTo()->result
     */
    public function natural()
    {
        return $this->belongsTo('App\Natural');
    }
}

