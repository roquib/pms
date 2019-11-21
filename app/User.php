<?php

namespace App;

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
        'name', 'email', 'password', 'role'
    ];
    public function hasRole($role)
    {
        return $this->role == $role;
    }
    public function isAdmin($role)
    {
        return $this->role == $role;
    }
    public function role()
    {
        return $this->hasOne(Role::class, 'role_id', 'role_id');
    }
    public function user_detail()
    {
        return $this->hasOne(UserDetail::class, 'user_id', 'id');
    }
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
}
