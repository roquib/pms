<style>
    * {
        margin: 0px;
        padding: 0px;
    }

    /*.container {
        max-width: 1340px;
    }
    */
    .container {
        max-width: 100%;
    }

    .navbar-header {

        background-color: #00F3FF;
        height: 76px;
        position: sticky;
        top: 0;
        z-index: 2;
    }

    .navbar-expand-lg .navbar-nav .nav-link {

        padding-right: 20px !important;
        padding-left: 20px !important;

    }

    .hospita_logo_img {
        margin: auto;
        height: 46px;
        width: 80px;


    }



    .navbar-light .navbar-nav .nav-link {

        color: black;
    }

    .bg-light {

        background-color: #A4C2DF !important;
    }

    .form-inline .form-control {

        display: inline-block;
        width: 140px;
        vertical-align: middle;

    }

    .btn.btn-outline-success.my-2.my-sm-0 {

        color: white;
        border-color: black;
        width: 66px;
        padding-top: 5px;
        padding-left: 9px;

    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: .25rem 1.5rem !important;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }



    .btn-outline-success:hover {

        color: #fff;
        background-color: #010903;
        border-color: #040d06;

    }

    .dropdown-item {

        text-align: center;

    }

    .navbar {

        padding-top: 12px;
    }

    .a_hover:hover {

        background-color: lightseagreen;
        color: white !important;

    }

    .a_hover {

        border-radius: 3px;
    }

    /*media qurey navbar data toggle*/


    /*media qurey navbar data toggle*/


    @media (min-width: 100px) and (max-width: 1170.98px) {

        .navbar-nav.ml-auto {

            margin-top: 40px;

        }

        .a_hover {

            padding-top: 17px;
            text-align: center;
            margin: 0 auto;
            display: inline-block;
            padding-bottom: 17px;

        }

        .navbar-nav.ml-auto {
            margin-top: 30px !important;
            background-color: rebeccapurple;
            overflow: hidden;
            width: 35%;
            text-align: center;
            margin: 0 auto;
            border-radius: 10px;


        }

        .form-inline .form-control {
            display: inline-block;
            width: 65%;
            vertical-align: middle;
            margin: auto;
        }

        .form-inline {
            display: inline-block;
            margin: auto;
        }


        .d-inline-block.login_button {
            background-color: aqua;
            border-radius: 4px;
            margin: auto !important;
            width: 90%;
            text-align: center;
        }


        .logo_img {
            width: 31px;
            padding-right: 5px;
            margin: auto;
        }

        a .login_img {
            width: 20px;
            margin-left: 13x !important;
            text-align: center;
            margin: auto;
        }

        a .signin_img {
            width: 20px;
            text-align: center;
            margin: auto;
        }

    }
</style>


<!-- Navbar -->

<div class=" navbar-header">

    <nav class="navbar navbar-expand-lg navbar-light ">

        <div class="container">

            <a class="navbar-brand" href="index.html"><img class="hospita_logo_img"
                    src="{{asset('patient/img/medical.png')}}" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse text-center  " id="navbarSupportedContent">

                <div  style="margin-left: auto !important;">

                <ul class="navbar-nav ml-auto  ">

                    <li class="nav-item active ">

                        <a class="nav-link a_hover" href="{{ route('/') }}"><img src="{{asset('patient/img/home.png')}}"
                                class="logo_img" alt="" />Home

                            <span class="sr-only">(current )</span>

                        </a>

                    </li>

                    <li class="nav-item ">

                        <a class="nav-link a_hover" href="{{route('doctor')}}"> <img
                                src="{{asset('patient/img/doctor.png')}}" class="logo_img" alt="" /> Doctor</a>

                    </li>



                    <li class="nav-item  dropdown ">

                        <a class="nav-link dropdown-toggle a_hover" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="{{asset('patient/img/list.png')}}" class="logo_img" alt="" />Category
                        </a>

                        <div class="dropdown-menu " aria-labelledby="navbarDropdown">


                            <a class="dropdown-item a_hover" href="{{ URL::to('/Cardiology')}} ">
                                Cardiology
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Dental')}}">
                                Dental & Maxillofacial
                                Surgery
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Endocrinology')}}">
                                Endocrinology &
                                Diabetology
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Neurology')}}">
                                Neurology
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Nephrology')}}">
                                Nephrology
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Psychology')}}">
                                Psychology
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Obstetrics')}}">
                                Obstetrics & Gynaecology
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Ophthalmology')}}">
                                Ophthalmology
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Rheumatology')}}">
                                Rheumatology
                            </a>

                            <a class="dropdown-item a_hover" href="{{ URL::to('/Urology')}}">
                                Urology
                            </a>



                        </div>

                    </li>

                    <li class="nav-item ">

                        <a class="nav-link a_hover " href="{{route('appointment')}}"> <img
                                src="{{asset('patient/img/appointment.png')}}" class="logo_img" alt="" />Appointment</a>

                    </li>

                    <li class="nav-item ">

                        <a class="nav-link a_hover " href="{{route('contact')}}"> <img
                                src="{{asset('patient/img/phone.png')}}" class="logo_img" alt="" />Contact</a>

                    </li>

                </ul>

            </div>

                <input class="form-control search-form-control " type="search" placeholder="Search" style="width: 12%;" aria-label="Search">

                <button class="btn btn-success text-sm-center" type="submit">Search</button>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{route('profile.user')}}" class="dropdown-item">Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>

        </div>


    </nav>

</div>