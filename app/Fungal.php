<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fungal extends Model
{
    /**
     * Fungal is a subclass of Natural
     *
     * @return belongsTo()->result
     */
    public function natural()
    {
        return $this->belongsTo('App\Natural');
    }
}

