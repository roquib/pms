<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'role_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
