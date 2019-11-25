<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function appointment()
    {
        return "appointment";
    }
    public function register()
    {
        return  "register";
    }
    public function login()
    {
        return "login";
    }
}
