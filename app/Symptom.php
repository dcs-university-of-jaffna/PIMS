<?php

/**
 * Model representing symptoms table
 * PHP version 7.2.19
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
 * Class representing relations on Symptom
 * PHP version 7.2.19
 *
 * @category Model->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class Symptom extends Model
{
    /**
     * Symptom has many Incidents
     *
     * @return belongsToMany()->result
     */
    public function incidents()
    {
        return $this->belongsToMany('App\Incident')
            ->using('App\Incident_Symptom')
            ->withTimestamps();
    }

}

