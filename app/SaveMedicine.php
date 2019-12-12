<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SaveMedicine extends Model
{
    protected $fillable = [
        'name',
        'patient_id',
        'prescription_id'
    ];
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
    public function prescription()
    {
        return $this->belongsTo('App\Prescription');
    }
    public function doctor($id)
    {
        return DB::table('users')->where('id', $id)->get()->first()->name;
    }
}
