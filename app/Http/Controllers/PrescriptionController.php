<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function prescriptionDoc($id, Request $request)
    {
        return view('pages.admin.prescription', ['id' => $id]);
    }
}
