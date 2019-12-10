<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the Country that owns the users
     **/
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
