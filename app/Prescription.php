<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Patient;
use App\User;
use DB;
use App\Test;
use App\Medicine;

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
    public function tests($patientId, $prescriptionId)
    {
        return DB::table('save_tests')->where('patient_id', $patientId)->where('prescription_id', $prescriptionId)->get();
    }
    public function medicines($patientId, $prescriptionId)
    {
        return DB::table('save_medicines')->where('patient_id', $patientId)->where('prescription_id', $prescriptionId)->get();
    }
    public function patients($id)
    {
        return DB::table('patients')->where('id', $id)->get();
    }
    public function daktar($id)
    {
        return DB::table('users')->where('id', $id)->get()->first();
    }
    public function test_price($obj)
    {
        return Test::where('test', $obj)->get()->first()->price;
    }
    public function medicine_price($obj)
    {
        return Medicine::where('name', $obj)->get()->first()->price;
    }
}
