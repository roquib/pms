<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmecy extends Model
{
    protected $fillable = [
        'name',
        'patient_id'
    ];
}
