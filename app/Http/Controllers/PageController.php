<?php

namespace App\Http\Controllers;

use App\Department;
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
        $departments = Department::where('role_id', 5)->get();
        // dd($departments);
        return view('patients.appointment', ['departments' => $departments]);
    }

    public function doctor()
    {
        return view('doctors.body');
    }
}
