<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class all_admin_login_Controller extends Controller
{
    // public function login(){

    //     return view ('adminlogin.login');


    // }

    public function alltest(){

        return view ('pages.admin.alltest');


    }
    
    public function allroom(){

        return view ('pages.admin.allroom');


    }

    public function allmedicine(){

        return view ('pages.admin.allmedicine');


    }
}
