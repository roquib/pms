<?php

namespace App\Http\Controllers;

use App\SaveMedicine;
use Illuminate\Http\Request;

class PharmecyController extends Controller
{
    public function store()
    { }
    public function fetch()
    {
        // $prescription = Prescription::select('patient_id')->distinct()->get();
        $patients = SaveMedicine::select('patient_id')->distinct()->get();
        // dd($patients);
        return view('pages.admin.medicine-patient', ['patients' => $patients]);
    }
    public function view($id)
    {
        return view('pages.admin.medicine-info');
    }
}
