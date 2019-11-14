<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name'];
    protected $primaryKey = 'id';
    public $timestamps=false;
    
    public function users()
    {
    	return $this->hasMany('App\User','role_id','role_id');
    }
}
