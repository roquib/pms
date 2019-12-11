<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PharmecyController extends Controller
{
    public function store()
    { }
    public function fetch()
    {
        return view('pages.admin.medicine-patient');
    }
}
