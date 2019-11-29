<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
    */
    public $timestamps = false;

    /**
     * Get the Country that owns the users
     *
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
    **/
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
