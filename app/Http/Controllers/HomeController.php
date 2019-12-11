<?php

namespace App\Http\Controllers;

use App\Department;
use App\Patient;
use App\Prescription;
use App\SaveMedicine;
use App\SaveTest;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $departments = Department::where('role_id', 5)->get();
        return view('home', ['departments' => $departments]);
    }
    public function profile()
    {
        $id = Auth::id();
        $patient = Patient::where('user_id', $id)->get()->first();
        // dd($patient);
        $prescriptions = Prescription::where('patient_id', $patient->id)->get();
        // dd($prescriptions, $id);
        $save_medicines = SaveMedicine::where('patient_id', $patient->id)->get();
        $save_tests = SaveTest::where('patient_id', $patient->id)->get();
        return view('patients.profile', ['patient' => $patient, 'prescriptions' => $prescriptions, 'save_medicines' => $save_medicines, 'save_tests' => $save_tests]);
    }
}
