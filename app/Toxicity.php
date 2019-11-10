<?php

/**
 * Model representing toxicities table
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
 * Class representing relations on Toxicity
 * PHP version 7.2.19
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
     * Toxicity has one Incidents
     *
     */
    public function incident()
    {
        return $this->hasOne('App\Incident');
    }

    /**
     * Toxicity has one Toxin
     *
     */
    public function toxin()
    {
        return $this->belongsTo('App\Toxin');
    }

    /**
     * Toxicity has one Management_Group
     *
     */
    public function management_group()
    {
        return $this->belongsTo('App\ManagementGroup');
    }

    /**
     * Toxicity has one (natural || chemical || pharmaceutical || other_toxicity)
     *
     */
    public function natural()
    {
        return $this->hasOne('App\Natural', 'id');
    }

    public function chemical()
    {
        return $this->hasOne('App\Chemical', 'id');
    }

    public function pharmaceutical()
    {
        return $this->hasOne('App\Pharmaceutical', 'id');
    }

    public function other_toxicity()
    {
        return $this->hasOne('App\Other_Toxicity', 'id');
    }

}

