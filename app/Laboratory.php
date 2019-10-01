<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laboratory extends Model
{
    /**
     * laboratory has one Incident
     */
    public function incident()
    {
        return $this->belongsTo('App\Incident');
    }
}
