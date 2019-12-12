@extends('layouts.master')
@section('content')
<div class="doctor_all_profile">

    <div class="container3">
        <h1 class="display-5 text-center mt-5 " style="background: cadetblue;margin: auto;width: 60%;line-height: 60px;border-radius: 12px;font-family: Georgia, serif;">
            List of Doctors Available Now
        </h1>

        <div class="row">

            <div class="col-sm-4">

                <a href="doctor/doctor_psychology.html">
                <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                <div class="dor_cont">

                    <b>Name:</b> Md. Nazmul Islam <br />
                    <b>Specialist:</b> psychology <br />
                    <b>Degree:</b>
                    (MBBS, BMBS, MBphB, MCPH)

                </div>

            </a>

            </div>


            <div class="col-sm-4">

                <a class="" href="doctor/doctor_cardiology.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="dor_cont">


                        <b>Name:</b> Prof.Dr. Md.Mohamad Shekh <br />
                        <b>Specialist:</b> Cardiology. <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, MBChB, MBBCh)


                    </div>


                </a>



            </div>



            <div class="col-sm-4">

                <a href="doctor/doctor_dental.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="dor_cont">

                        <b>Name:</b> Prof.Dr.Robel khan <br />
                        <b>Specialist:</b> Dental & Maxillofacial Surgery <br />
                        <b>Degree:</b>
                        (MBBS, DMD, DDS)


                    </div>

                </a>

            </div>



        </div>




        <div class="row">

            <div class="col-sm-4">


                <a class="img_hover" href="doctor/doctor_endocrilogy.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="dor_cont">

                        <b>Name:</b> Prof.Dr.Sormi <br />
                        <b>Specialist:</b> Endocrinology & Diabetology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, D.O)


                    </div>

                </a>


            </div>


            <div class="col-sm-4">

                <a href="doctor/doctor_Neurology.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="dor_cont">



                        <b>Name:</b> Prof.Dr.Sazzad Hossin <br />
                        <b>Specialist:</b> Neurology <br />
                        <b>Degree:</b>
                        (MBBS, M.D,NDD,BSMM)


                    </div>

                </a>

            </div>



            <div class="col-sm-4">

                <a href="docctor/doctor_Nephrology.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="dor_cont">

                        <b>Name:</b> Prof.Dr.Jakir Hossien <br />
                        <b>Specialist:</b> Nephrology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, D.O, NBPO)


                    </div>
                </a>


            </div>


        </div>



        <div class="row">

            <div class="col-sm-4">

                <a href="doctor/doctor_obstetrics & Gynaecology.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="dor_cont">

                        <b>Name:</b> Prof.Dr.Sabbir Hossien <br />
                        <b>Specialist:</b> Obstetrics & Gynaecology<br />
                        <b>Degree:</b>
                        (MBBS, M.D,NDD,OBBS)


                    </div>
                </a>


            </div>


            <div class="col-sm-4">

                <a href="doctor/doctor_rheumatology.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="dor_cont">


                        <b>Name:</b> Prof.Dr.Songita <br />
                        <b>Specialist:</b> Rheumatology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, RDMC, D.O)


                    </div>

                </a>


            </div>



            <div class="col-sm-4">

                <a href="doctor/doctor_Urology.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="dor_cont">

                        <b>Name:</b> Prof.Dr.Rony Ahmaed<br />
                        <b>Specialist:</b> Urology <br />
                        <b>Degree:</b>
                        (MBBS, M.D,NDD,BCUM)



                    </div>
                </a>


            </div>


        </div>




        <div class="row">

            <div class="col-sm-4">

                <a href="doctor/doctor_ophthalmology.html">
                    <img class="img_profile" src="{{asset('patient/img/ddd.jpg')}}" alt="" />

                    <div class="last_dor_cont">


                        <b>Name:</b> Md.Mohan Shekh <br />
                        <b>Specialist:</b> Ophthalmology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, MBChB, MBOP)



                    </div>
                </a>


            </div>




        </div>



    </div>


</div>
@endsection
@section('css')
<style>
    .container3 {

        width: 930px;
        margin: auto;
    }

    .img_profile {

        margin-top: 175px;
        width: 225px;
    }


    .dor_cont {

        margin-bottom: -85px;
        color: #4e5e6a;
        font-size: 14px;
        line-height: 22px;
        font-weight: 400;
        font-family: "Open Sans", sans-serif;
    }

    .last_dor_cont {

        margin-bottom: 85px;
        color: #4e5e6a;
        font-size: 14px;
        line-height: 22px;
        font-weight: 400;
        font-family: "Open Sans", sans-serif;
    }

    .img_profile:hover {

        opacity: 0.7;
    }
</style>
@endsection