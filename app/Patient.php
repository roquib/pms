<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

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
    public function user($id)
    {
        return DB::table('users')->where('id', $id)->get()->first();
    }
}
