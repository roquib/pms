<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'username', 'active', 'phone'
    ];
    // public function hasRole($role)
    // {
    //     return $this->role == $role;
    // }
    public function patient($id)
    {
        // return DB::table('patients')->where('user_id', $id)->get()->first();
        return Patient::where('user_id',$id)->get()->first()->gender;
    }
    public function doctor($id)
    {
        // return DB::table('users')->where('id', $id)->get()->first();
        return User::where('id',$id)->get()->first();
    }
    private function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role) == strtolower($this->role->name)) ? true : null;
    }
    public function hasRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $need_role) {
                if ($this->checkIfUserHasRole($need_role)) {
                    return true;
                }
            }
        } else {
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }
    public function isAdmin($role)
    {
        return $this->role == $role;
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'role_id', 'role_id');
    }
    public function department()
    {
        return $this->belongsToMany('App\Role', 'departments', 'user_id', 'role_id', 'id', 'role_id');
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
