<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Patient;
use App\Payment;
use App\Prescription;
use App\SaveMedicine;
use App\SaveTest;

class DashboardController extends Controller
{
    public function formdoctor()
    {
        return view('pages.admin.registration.doctor');
    }
    public function formbill()
    {
        return view('pages.admin.registration.bill');
    }
    public function formtest()
    {
        return view('pages.admin.registration.test');
    }
    public function formmedicine()
    {
        return view('pages.admin.registration.medicine');
    }
    public function adminShowPatientAll()
    {
        $patients = User::where('role_id', 6)->get();
        // dd($patients);
        return view('pages.admin.adminShowPatientAll', ['patients' => $patients]);
    }
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

    public function billPaymentConfirm($id)
    {
        $patient = Patient::findOrFail($id);
        $prescriptions = Prescription::where('patient_id', $id)->take(3)->get();
        $tests = SaveTest::where('patient_id', $id)->where('prescription_id')->get();
        $medicines = SaveMedicine::where('patient_id', $id)->get();
        $payment = Payment::where('patient_id', $id)->get();
        $total = 0;
        $pays = 0;
        // dd($payment);
        foreach ($payment as $pay) {
            $total = (int) $pay->total;
            $pays += (int) $pay->pay;
        }
        $due = $total - $pays;
        return view('pages.admin.billPaymentConfirm', ['patient' => $patient, 'prescriptions' => $prescriptions, 'tests' => $tests, 'medicines' => $medicines, 'total_payment' => $total, 'due_payment' => $due, 'pay_payment' => $pays]);
    }
    public function reception()
    {
        return view('pages.admin.reception');
    }
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
        $users = User::where('role_id', 'not like', '%6%')->get();
        // $users = DB::table('users')->where('role_id', 'not like', '%6%')->get();
        return view('pages.admin.all-admins', ['users' => $users]);
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
