<?php


/**
 * Model representing naturals table
 *
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
 * Class representing attributes of Natural
 *
 * PHP version 7.2.19
 *
 * @category Model->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class Natural extends Model
{
    /**
     * Natural is a subclass of Toxicity
     *
     * @return belongsTo()->result
     */
    public function toxicity()
    {
        return $this->belongsTo('App\Toxicity');
    }
}

