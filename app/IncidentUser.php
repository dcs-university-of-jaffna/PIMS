<?php

/**
 * PivotModel representing incident_user table
 * PHP version 7.2.19
 *
 * @category Model
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class representing attributes of incident_user pivot table
 * PHP version 7.2.19
 *
 * @category PivotModel->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */
class IncidentUser extends Pivot
{
    public $incrementing = true;
}
