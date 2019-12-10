<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Patient;
use App\Prescription;

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
    public function payment()
    {
        return view('pages.admin.payment');
    }
    public function billPayment()
    {
        return view('pages.admin.billPayment');
    }
    public function bill()
    {
        $prescription = Prescription::latest()->get();
        return view('pages.admin.bill', ['prescription' => $prescription]);
    }
    public function allPatient()
    {
        $id = Auth::id();
        $patients = DB::table('patients')->where('doctor', $id)->get();
        // dd($patients,$id);
        return view('pages.admin.allpatient', ['patients' => $patients]);
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
    public function destroy($id)
    {
        DB::table('patients')->where('id', $id)->delete();
        return back();
    }
}
