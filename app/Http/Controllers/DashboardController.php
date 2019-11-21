<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Auth;
use DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }
    public function dashboard()
    {
        return view('layouts.admin');
    }
    public function profile()
    {
        return view('pages.admin.profile');
    }
    public function allAdmins()
    {
        return view('pages.admin.all-admins', ['users' => User::all()]);
    }
    public function viewAdmin($id)
    {
        return view('pages.admin.view-admin', ['user' => User::find($id)]);
    }
    public function setting()
    {
        return view('pages.admin.setting');
    }
}
