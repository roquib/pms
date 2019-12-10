<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all(), ['due' => $request->total - $request->pay]);
        $payment = new Payment();
        $payment->total = $request->total;
        $payment->pay = $request->pay;
        $payment->due = $request->total - $request->pay;
        $payment->patient_id = $request->patient_id;
        $payment->save();
        return back();
    }
}
