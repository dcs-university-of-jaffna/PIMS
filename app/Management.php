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
     */
    public function incidents()
    {
        return $this->belongsToMany('App\Incident')
            ->using('App\IncidentManagement')
            ->withTimestamps();
    }

    /**
     * Managements has many ManagementGroup     *
     */
    public function management_groups()
    {
        return $this->belongsToMany('App\ManagementGroup')
            ->using('App\ManagementManagementGroup')
            ->withPivot('category')
            ->withTimestamps();
    }

}

