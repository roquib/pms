<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = [
        'disease', 'test', 'medicine',
        'patient_id',
        'user_id'
    ];
}
