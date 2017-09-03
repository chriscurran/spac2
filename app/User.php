<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'minor1_age',
        'minor2_age',
        'minor3_age',
        'minor4_age',
        'minor5_age',
        'joined',
        'renew'
    ];


    public function isMember() {
        return ($this->membership_type !== 'x');
    }

    public function isAdmin() {
        return ($this->is_admin === 1);
    }

    public function setPasswordAttribute($value) {

        $this->attributes['password'] = bcrypt($value);
    }

    public function getMinor1AgeAttribute($value) {
        if ($value === null)
            return null;
        return Carbon::createFromFormat('Y-m-d', $value)->format("m-d-Y");
    }
    public function getMinor2AgeAttribute($value) {
        if ($value === null)
            return null;
        return Carbon::createFromFormat('Y-m-d', $value)->format("m-d-Y");
    }
    public function getMinor3AgeAttribute($value) {
        if ($value === null)
            return null;
        return Carbon::createFromFormat('Y-m-d', $value)->format("m-d-Y");
    }
    public function getMinor4AgeAttribute($value) {
        if ($value === null)
            return null;
        return Carbon::createFromFormat('Y-m-d', $value)->format("m-d-Y");
    }
    public function getMinor5AgeAttribute($value) {
        if ($value === null)
            return null;
        return Carbon::createFromFormat('Y-m-d', $value)->format("m-d-Y");
    }

    public function getJoinedAttribute($value) {
        if ($value === null)
            return null;
        return Carbon::createFromFormat('Y-m-d', $value)->format("m-d-Y");
    }
    public function getRenewAttribute($value) {
        if ($value === null)
            return null;
        return Carbon::createFromFormat('Y-m-d', $value)->format("m-d-Y");
    }

}
