<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PageController extends Controller
{
		public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard()
    {
    	if (Gate::allows("isAdmin")) {
    		return view('admin.dashboard');
    	}else {
    		return view('home');
    	}
    }
}
