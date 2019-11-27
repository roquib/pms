<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('patients.home');
    }
    public function contact()
    {
        return view('patients.contact');
    }
    public function appointment()
    {
        return view('patients.appointment');
    }

    public function doctor()
    {
        return view('doctors.body');
    }
}
