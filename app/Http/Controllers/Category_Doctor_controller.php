<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class Category_Doctor_controller extends Controller
{
    public function showCardiology(){

        return view('category.doctor_cardiology');

    }
    public function showDental(){

        return view('category.doctor_Dental');

    }
    public function showEndocrinology(){

        return view('category.doctor_Endocrinology');

    }
    public function showNeurology(){

        return view('category.doctor_Neurology');

    }
    public function showNephrology(){

        return view('category.doctor_Nephrology');

    }
    public function showPsychology(){

        return view('category.doctor_Psychology');

    }
    public function showObstetrics(){

        return view('category.doctor_Obstetrics');

    }
    public function showOphthalmology(){

        return view('category.doctor_Ophthalmology');

    }
    public function showRheumatology(){

        return view('category.doctor_Rheumatology');

    }
    public function showUrology(){

        return view('category.doctor_Urology');

    }
}
