<div class="header1">

    <nav class="navbar navbar-expand-lg navbar-light ">

        <div class="container">

            <a class="navbar-brand" href="index.html"><img class="hospita_logo_img"
                    src="{{asset('patient/img/medical.png')}}" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">

                <span class="navbar-toggler-icon"></span>

            </button>
   
            <div class="collapse navbar-collapse text-center  " id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto  ">

                    <li class="nav-item active ">

                        <a class="nav-link a_hover" href="{{ route('home') }}"><img src="{{asset('patient/img/home.png')}}"
                                class="logo_img" alt="" />Home

                            <span class="sr-only">(current )</span>

                        </a>

                    </li>

                    <li class="nav-item ">

                        <a class="nav-link a_hover" href="Doctor.html"> <img src="{{asset('patient/img/doctor.png')}}"
                                class="logo_img" alt="" /> Doctor</a>

                    </li>



                    <li class="nav-item  dropdown ">

                        <a class="nav-link dropdown-toggle a_hover" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="{{asset('patient/img/list.png')}}" class="logo_img" alt="" />Category</a>

                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">


                            <a class="dropdown-item a_hover" href="doctor/doctor_cardiology.html">Cardiology</a>
                            <a class="dropdown-item a_hover" href="doctor/doctor_dental.html">Dental &
                                Maxillofacial
                                Surgery </a>
                            <a class="dropdown-item a_hover" href="doctor/doctor_endocrilogy.html">Endocrinology
                                &
                                Diabetology</a>
                            <a class="dropdown-item a_hover" href="doctor/doctor_Neurology.html">Neurology</a>
                            <a class="dropdown-item a_hover" href="doctor/doctor_Nephrology.html">Nephrology</a>
                            <a class="dropdown-item a_hover" href="doctor/doctor_psychology.html">psychology</a>
                            <a class="dropdown-item a_hover"
                                href="doctor/doctor_obstetrics & Gynaecology.html">Obstetrics & Gynaecology</a>
                            <a class="dropdown-item a_hover" href="doctor/doctor_ophthalmology.html">Ophthalmology</a>
                            <a class="dropdown-item a_hover" href="doctor/doctor_rheumatology.html">Rheumatology</a>
                            <a class="dropdown-item a_hover" href="doctor/doctor_Urology.html">Urology</a>









                        </div>

                    </li>

                    <li class="nav-item ">

                        <a class="nav-link a_hover " href="user_regstration.html"> <img
                                src="{{asset('patient/img/appointment.png')}}" class="logo_img" alt="" />Appointment</a>

                    </li>

                    <li class="nav-item ">

                        <a class="nav-link a_hover " href="#contact"> <img src="{{asset('patient/img/phone.png')}}"
                                class="logo_img" alt="" />Contact</a>

                    </li>

                </ul>

                <div class="d-inline-block">

                    <form class="form-inline ">

                        <input class="form-control " type="search" placeholder="Search" aria-label="Search">

                        <button class="btn btn-success text-sm-center" type="submit">Search</button>


                        <div class="d-inline-block login_button">


                            <a class="btn text-sm-center" href="signin.html"><img
                                    src="{{asset('patient/img/login.png')}}" data-toggle="tooltip" title="Signin"
                                    class="login_img" alt="" /></a>


                            <a class="" href="user_regstration.html"><img src="{{asset('patient/img/logout.png')}}"
                                    data-toggle="tooltip" class="signin_img" title="Signup" /></a>



                        </div>
                    </form>


                </div>

            </div>

        </div>
    </nav>
</div>
