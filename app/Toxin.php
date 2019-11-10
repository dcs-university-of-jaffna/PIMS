<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class representing relations on Poison
 * PHP version 7.2.19
 *
 * @category Model->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */
class Toxin extends Model
{
    /**
     * Toxin has many Symptoms
     */
    public function symptoms()
    {
        return $this->belongsToMany('App\Symptom')
            ->using('App\SymptomToxin')
            ->withPivot('category')
            ->withTimestamps();
    }

    /**
     * Toxin has many Toxicities
     */
    public function toxicities()
    {
        return $this->hasMany('App\Toxicity');
    }
}
