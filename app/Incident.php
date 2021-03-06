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
    protected $guarded = ['id', 'patient_id', 'toxicity_id'];

    /**
     * Incident has one Patient
     */
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }

    /**
     * Incident has one Toxicity
     */
    public function toxicity()
    {
        return $this->belongsTo('App\Toxicity');
    }

    /**
     * Incident has one laboratory
     */
    public function laboratory()
    {
        return $this->hasOne('App\Laboratory');
    }
    /**
    */
    public function incidentSymptom(){
        return $this->belongsTo('App\IncidentSymptom');
    }

    /**
     * Incident has many Symptoms
     */
    public function symptoms()
    {
        return $this->belongsToMany('App\Symptom')
            ->using('App\IncidentSymptom')
            ->withTimestamps();
    }

    /**
     * Incident has many Managements
     */
    public function managements()
    {
        return $this->belongsToMany('App\Management')
            ->using('App\IncidentManagement')
            ->withTimestamps();
    }

    /**
     * Incident has many Users
     */
    public function users()
    {
        return $this->belongsToMany('App\User')
            ->using('App\IncidentUser')
            ->withTimestamps();
    }
}

