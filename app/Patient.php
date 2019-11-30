<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'gender',
        'department',
        'doctor',
        'date',
        'address'
    ];
}
