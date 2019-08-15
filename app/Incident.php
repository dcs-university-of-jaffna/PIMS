<?php

/**
 * Model representing incidents table
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
 * Class representing relations on Incident
 * PHP version 7.2.19
 *
 * @category Model->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class Incident extends Model
{
    /**
     * Incident has one Patient
     *
     * @return belongsTo()->result
     */
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    /**
     * Incident has one Toxicity
     *
     * @return belongsTo()->result
     */
    public function toxicity()
    {
        return $this->belongsTo('App\Toxicity');
    }

    /**
     * Incident has many Symptoms
     *
     * @return belongsToMany()->result
     */
    public function symptoms()
    {
        return $this->belongsToMany('App\Symptom')
            ->using('App\Incident_Symptom')
            ->withTimestamps();
    }

    /**
     * Incident has many Managements
     *
     * @return belongsToMany()->result
     */
    public function managements()
    {
        return $this->belongsToMany(
            'App\Management', 'prescriptions', 'incident_id', 'management_id'
        )
            ->using('App\Prescription')
            ->withPivot('doctor_id')
            ->withTimestamps();
    }

    /**
     * Incident has many Users
     *
     * @return belongsToMany()->result
     */
    public function users()
    {
        return $this->belongsToMany(
            'App\User', 'prescriptions', 'incident_id', 'doctor_id'
        )
            ->using('App\Prescription')
            ->withPivot('management_id')
            ->withTimestamps();
    }
}

