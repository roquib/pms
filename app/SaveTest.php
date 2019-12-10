<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaveTest extends Model
{
    protected $fillable = [
        'name',
        'patient_id',
        'prescription_id'
    ];
}
