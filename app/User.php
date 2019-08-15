<?php

/**
 * Model representing users table
 * PHP version 7.2.19
 *
 * @category Model
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;

/**
 * Class representing attributes of User
 * PHP version 7.2.19
 *
 * @category Model->Class
 * @package  App
 * @author   Group7s <dcs@jfn.ac.lk>
 * @license  GNU General Public License (GPL)
 * @link     https://github.com/dcs-university-of-jaffna/PIMS.git
 */

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'userType','email', 'isConfirmed','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Whoever make this function please write this doc comment
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * User has many Incidents
     *
     * @return belongsToMany()->result
     */
    public function incidents()
    {
        return $this->belongsToMany(
            'App\Incident', 'prescriptions', 'doctor_id', 'incident_id'
        )
            ->using('App\Prescription')
            ->withPivot('management_id')
            ->withTimestamps();
    }

    /**
     * User has many Managements
     *
     * @return belongsToMany()->result
     */
    public function managements()
    {
        return $this->belongsToMany(
            'App\Management', 'prescriptions', 'doctor_id', 'management_id'
        )
            ->using('App\Prescription')
            ->withPivot('incident_id')
            ->withTimestamps();
    }
}
