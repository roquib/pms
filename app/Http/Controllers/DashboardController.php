<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Patient;
use App\Prescription;
use App\SaveMedicine;
use App\SaveTest;

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
<<<<<<< HEAD

=======
    public function billPaymentConfirm($id)
    {
        $patient = Patient::findOrFail($id);
        $prescriptions = Prescription::where('patient_id', $id)->take(3)->get();
        $tests = SaveTest::where('patient_id', $id)->where('prescription_id',)->get();
        $medicines = SaveMedicine::where('patient_id', $id)->get();
        return view('pages.admin.billPaymentConfirm', ['patient' => $patient, 'prescriptions' => $prescriptions, 'tests' => $tests, 'medicines' => $medicines]);
    }
>>>>>>> 9c2a6d8b6c303c1d9e8eeed8952f9f9afa552b02
    public function bill()
    {
        $prescription = Prescription::select('patient_id')->distinct()->get();
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
