<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
     public function wants()
    {
        return $this->belongsToMany(Plan::class, 'plan_user', 'user_id', 'plan_id')->withTimestamps();
    }

    
    public function want($planId)
{
    // confirm if already following
    $exist = $this->is_wanting($planId);

    if ($exist) {
        // do nothing if already following
        return false;
    } else {
        // follow if not following
        $this->wants()->attach($planId);
        return true;
    }
}

public function unwant($planId)
{
    // confirming if already following
    $exist = $this->is_wanting($planId);
   


    if ($exist) {
        // stop following if following
        $this->wants()->detach($planId);
        return true;
    } else {
        // do nothing if not following
        return false;
    }
}


public function is_wanting($planId) {
    return $this->wants()->where('plan_id', $planId)->exists();
}
    
}