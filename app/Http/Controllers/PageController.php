<?php

namespace App\Http\Controllers;

use App\Department;
use App\Patient;
use App\Prescription;
use App\SaveMedicine;
use App\SaveTest;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PageController extends Controller
{
    public function home()
    {
        return view('patients.home');
    }
    public function showPatient($id)
    {
        $patient = Patient::findOrFail($id);
        $prescriptions = Prescription::where('patient_id', $id)->take(3)->get();
        $tests = SaveTest::where('patient_id', $id)->where('prescription_id')->get();
        $medicines = SaveMedicine::where('patient_id', $id)->get();
        return view('pages.admin.show', ['patient' => $patient, 'prescriptions' => $prescriptions, 'tests' => $tests, 'medicines' => $medicines]);
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            if (empty($request->search)) {
                return [["name" => "no data found", "id" => null]];
            } else {
                // $products = DB::table('patients')->where('name', 'LIKE', '%' . $request->search . "%")->get();
                $products = DB::table('patients')->where('id', $request->search)->get();
                // if ($products) {
                //     foreach ($products as $key => $product) {
                //         $output .= '<li>' .
                //             "<a href='/patient/$product->id'>" . $product->name . '</a>' .
                //             '</li><br>';
                //     }
                //     return Response($output);
                // }
                return $products;
            }
        }
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
        return view('home', ['departments' => $departments]);
    }

    public function doctor()
    {
        return view('doctors.body');
    }
}
