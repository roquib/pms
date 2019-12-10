<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Medicine;
use App\Test;
use Illuminate\Http\Request;

class AllApiController extends Controller
{
    public function tests()
    {
        return Test::all();
    }
    public function medicines()
    {
        return Medicine::all();
    }
}
