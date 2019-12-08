<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\User;
use DB;

class Prescription extends Model
{
    protected $fillable = [
        'disease', 'test', 'medicine',
        'patient_id',
        'user_id'
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function doctr($id)
    {
        return DB::table('users')->where('id', $id)->get()->first();
    }
}
