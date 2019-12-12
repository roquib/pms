<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

  use AuthenticatesUsers;
  protected $username = 'username';
  protected $redirectTo = '/dashboard';
  protected $guard = 'web';
  public function getLogin()
  {
    if (Auth::guard('web')->check()) {
      return redirect()->route('dashboard');
    }
    return view('login');
  }
  // post login
  public function postLogin(Request $request)
  {
    $auth = Auth::guard('web')->attempt([
      'username' => $request->username,
      'password' => $request->password,
      'active' => 1
    ]);
    if ($auth) {
      return redirect()->route('dashboard');
    }
    return redirect()->route('/');
  }
  public function getLogout()
  {
    // dd()
    Auth::guard('web')->logout();
    return redirect()->route('/');
  }
}
