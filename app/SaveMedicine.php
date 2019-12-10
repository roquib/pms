<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaveMedicine extends Model
{
    protected $fillable = [
        'name',
        'patient_id',
        'prescription_id'
    ];
}
