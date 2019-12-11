@extends('layouts.master')

@section('content')

<div class="header_login">

    <p class="text-center name ">{{ __('Login') }}</p>

    <form class="container" method="POST" action="{{ route('login') }}">

        @csrf


        <p class="text-center sec_name m-t-xs text-sm">{{__('Please login into your account.') }}</p>

        <div class="form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-right col_3_padd_right">

                <label for="email">{{__('Phone/Email') }} </label>

            </div>

            <div class="form-group col-sm-5  ">

                <input type="text" class="form-control input_width @error('email') is-invalid @enderror" id="email"
                    placeholder=" Type Your Phone/Email" name="email" value="{{ old('email') }}" required
                    autocomplete="email" autofocus />

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="col-sm-2">

            </div>

        </div>


        <div class="form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-right col_3_padd_right">

                <label for="password">{{ __('Password') }}</label>

            </div>

            <div class="form-group col-sm-5  ">

                <input type="Password" id="password"
                    class="form-control input_width @error('password') is-invalid @enderror" id="input-password"
                    placeholder=" Type Your Password" name="password" required autocomplete="current-password" />

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>

            <div class="col-sm-2">

            </div>

        </div>





        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-right "> </div>

            <div class="form-group col-sm-3 col_5_padd_right   ">

                <button type="submit" class="btn text-light login_button" style="background-color:#1DB198;">
                    {{ __('Login') }}</button>



            </div>

            <div class="col-sm-2">

            </div>

        </div>



        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-right "> </div>

            <div class="form-group col-sm-3 col_5_padd_right ">


                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}"
                    class="display-block m-t-md text-sm forget_password">{{ __('Forgot Your Password?') }}
                </a>
                @endif
                <p class=" m-t-xs text-sm para">Do not have an account?</p>
                <a href="{{route('register')}}" class="btn text-dark create_account"
                    style="background-color:#DAE0E5;">Create an account</a>


            </div>

            <div class="col-sm-2">

            </div>

        </div>


    </form>


</div>

@endsection

@section('css')


<style>
    .header_register {
        background-color: #F1F4F9;
        height: 100%;
        padding-top: 35px;
    }

    .name {
        max-width: 31%;
        margin-top: 63px;
        margin: 0 auto;
        margin-top: 62px;
        padding: 3px;
        border-radius: 5px;
        font-size: 23px;
        background-color: #00f3ff;
    }

    .sec_name {
        margin-top: 45px;
        font-size: 16px;
        font-weight: 400;
    }

    .header_register .container {

        max-width: 960px;
        margin-top: 50px;

    }

    .req_color {

        color: red;
        font-size: 20px;

    }

    h6 {

        font-size: 15px;
        margin-bottom: 62px;
    }


    .form-row {

        margin-right: 45px;
        margin-left: -45px;
        margin-bottom: -45px;

    }

    .col_3_padd_right {
        padding-right: 60px !important;
    }

    label {
        font-size: 15px;
        font-weight: normal;
        /* padding-left: 115px; */
        padding-top: 18px;
        padding_right: 40px;
    }

    .form-group {

        margin-bottom: 4rem;

    }

    .input_width {

        width: 63%;
        font-size: 14px;
        padding: 20px 7px;
        margin-top: 10px;
    }



    .req_color {

        color: red;
        font-size: 20px;

    }

    .last_name_m_top {

        margin-top: 6px;

    }



    /* .btn {
    
        background-color: #563D7C;
        color: white;
        padding-top: 7px;		
        margin-right: 23px;
        font-size: 13px;
                
        
    } */
    .login_button {

        width: 100px;


    }


    .col_5_padd_right {
        text-align: center;

    }

    .create_account {
        margin-left: 1px;
    }

    @media (min-width: 767.98px) and (max-width: 900px) {


        label {

            padding-top: 7px;

        }

        h6 {
            margin-right: 97px;
        }

        .input_width {

            width: 100% !important;
            margin: auto;

        }

        .col_5_padd_right {
            text-align: center;
            margin-left: 30px;
        }


    }


    @media (min-width:576px) and (max-width: 767.98px) {

        label {

            padding-top: 7px;

        }

        .input_width {

            width: 100% !important;
            margin: auto;

        }


        h6 {
            margin-right: 97px;
        }




    }


    @media (min-width: 575px) and (max-width: 675px) {

        .input_width {
            width: 100% !important;
            margin: auto;
        }



    }

    @media (min-width: 200px) and (max-width: 575px) {



        .col_3_padd_right {

            margin: auto;
            text-align: center !important;
            width: 100%;
            margin: auto;
            padding-left: 145px !important;
            width: auto;
        }

        .col_5_padd_right {
            text-align: center;
            margin-left: 78px;
        }


        h6 {
            text-align: center;
            margin-left: 84px;
        }

        .input_width {
            width: 60% !important;
            margin-left: 145px;
            text-align: center;
        }



        .form-group.col-sm-5.button_mediaquiey {
            padding-left: 90x;
            text-align: center;
        }

        .button_mediaquiey {

            padding-left: 60px !important;
        }
    }
</style>

@endsection