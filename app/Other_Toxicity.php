<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other_Toxicity extends Model
{
    /**
     * Other_Toxicity is a subclass of Toxicity
     *
     * @return belongsTo()->result
     */
    public function toxicity()
    {
        return $this->belongsTo('App\Toxicity');
    }
}
