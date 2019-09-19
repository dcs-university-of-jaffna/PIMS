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
     */
    public function toxicity()
    {
        return $this->belongsTo('App\Toxicity','id');
    }

    /**
     * Natural has one (flora || fauna || microbial || fungal)
     *
     */
    public function flora()
    {
        return $this->hasOne('App\Flora','id');
    }

    public function fauna()
    {
        return $this->hasOne('App\Fauna','id');
    }

    public function microbial()
    {
        return $this->hasOne('App\Microbial','id');
    }

    public function fungal()
    {
        return $this->hasOne('App\Fungal','id');
    }
}

