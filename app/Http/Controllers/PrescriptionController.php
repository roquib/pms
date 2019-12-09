<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Prescription;
use App\SaveMedicine;
use App\SaveTest;
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
        // dd($request);
        $tests = $request->tests;
        $medicines = $request->medicines;
        $prescription = new Prescription();
        $prescription->disease = $request->disease;
        $prescription->test_patient_id = $request->patientid;
        $prescription->medicine_patient_id = $request->patientid;
        $prescription->date = $request->date;
        $prescription->time = $request->time;
        $prescription->patient_id = $request->patientid;
        $prescription->user_id = Auth::id();
        $prescription->save();
        for ($i = 0; $i < count($tests); $i++) {
            SaveTest::create([
                'name' => $tests[$i],
                'patient_id' => $request->patientid,
                'prescription_id' => $prescription->id,
            ]);
        }
        for ($i = 0; $i < count($medicines); $i++) {
            SaveMedicine::create([
                'name' => $medicines[$i],
                'patient_id' => $request->patientid,
                'prescription_id' => $prescription->id,
            ]);
        }
        return redirect()->route('allPatient');
    }
}
