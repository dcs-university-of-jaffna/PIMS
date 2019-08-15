<?php

/**
 * Model representing managements table
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
 * Class representing attributes of Management
 * PHP version 7.2.19
 *
 * @category Model->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class Management extends Model
{
    /**
     * Management has many Incidents
     *
     * @return belongsToMany()->result
     */
    public function incidents()
    {
        return $this->belongsToMany(
            'App\Incident', 'prescriptions', 'management_id', 'incident_id'
        )
            ->using('App\Prescription')
            ->withPivot('doctor_id')
            ->withTimestamps();
    }

    /**
     * Management has many Users
     *
     * @return belongsToMany()->result
     */
    public function users()
    {
        return $this->belongsToMany(
            'App\User', 'prescriptions', 'management_id', 'doctor_id'
        )
            ->using('App\Prescription')
            ->withPivot('incident_id')
            ->withTimestamps();
    }
}

