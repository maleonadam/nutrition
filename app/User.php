<?php

namespace App;

use App\Order;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'password',
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

    // relationship with orders
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // relationship with roles
    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    // check user role
    public function hasRole($name)
    {
        foreach($this->roles as $role)
        {
            if($role->name == $name) return true;
        }
        return false;
    }

    // assigning a role
    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    // removing a role
    public function removeRole($role)
    {
        return $this->roles()->detach($role);
    }
}
