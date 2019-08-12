<?php

/**
 * Model representing toxicities table
 * php version 7.2.19
 *
 * @category Model
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class representing relations on Toxicity
 * php version 7.2.19
 *
 * @category Model->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class Toxicity extends Model
{
    /**
     * Toxicity has many Incidents
     *
     * @return hasMany()->result
     */
    public function incidents()
    {
        return $this->hasMany('App\Incident');
    }

    /**
     * Toxicity has many Symptoms
     *
     * @return belongsToMany()->result
     */
    public function symptoms()
    {
        return $this->belongsToMany('App\Symptom')
            ->using('App\Symptom_Toxicity')
            ->withTimestamps();
    }
}
