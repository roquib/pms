<?php

namespace App\Http\Controllers;

use App\Department;
use App\Patient;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    public function home()
    {
        return view('patients.home');
    }
    public function showPatient($id)
    {
        $patient = Patient::findOrFail($id);
        return view('pages.admin.show', ['patient' => $patient]);
    }
    public function appointmentConfirm(Request $request)
    {
        // dd($request);
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->phone = $request->phone_number;
        $patient->gender = $request->sex;
        $patient->department = $request->department;
        $patient->doctor = $request->doctor;
        $patient->date = $request->date;
        $patient->address = $request->address;
        $patient->user_id = Auth::id();
        $patient->save();
        return redirect()->route('appointmentConfirmGet')->with(['success' => "Your Appointment is set successfully"]);;
        // return view('patients.appointment-confirm')->with(['success' => "Your Appointment is set successfully"]);
    }
    public function appointmentConfirmGet()
    {
        return view('patients.appointment-confirm');
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
