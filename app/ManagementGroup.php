<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class representing attributes of ManagementGroup
 * PHP version 7.2.19
 *
 * @category Model->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */
class ManagementGroup extends Model
{
    /**
     * ManagementGroup has many Managements
     */
    public function managements()
    {
        return $this->belongsToMany('App\Management')
            ->using('App\ManagementManagementGroup')
            ->withPivot('category')
            ->withTimestamps();
    }

    /**
     * ManagementGroup has many Toxicities
     */
    public function toxicities()
    {
        return $this->hasMany('App\Toxicity');
    }
}
