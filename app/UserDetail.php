<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $primaryKey = "user_detail_id";
    protected $fillable = ['phone', 'address', 'sex', 'user_id'];
    protected $table = 'user_details';
}
