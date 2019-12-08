<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Prescription;
use Illuminate\Http\Request;
use Auth;

class PrescriptionController extends Controller
{
    public function prescriptionDoc($id, $patientid)
    {
        $patient = Patient::findOrFail($patientid);
        return view('pages.admin.prescription', ['id' => $id, 'patient' => $patient]);
    }
    public function prescriptionStore(Request $request)
    {
        // dd($request->all(), Auth::id());
        $prescription = new Prescription();
        $prescription->disease = $request->disease;
        $prescription->test = $request->test;
        $prescription->medicine = $request->medicine;
        $prescription->date = $request->date;
        $prescription->time = $request->time;
        $prescription->patient_id = $request->patientid;
        $prescription->user_id = Auth::id();
        $prescription->save();
        return redirect()->route('allPatient');
    }
}
