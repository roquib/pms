<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'total',
        'pay',
        'due',
        'patient_id'
    ];
}
