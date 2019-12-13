@extends('layouts.master')

@section('content')

 <div class="main-content">

<div class="container">
    <form class="appointment-form" id="frm-create-appointment" method="POST" action="{{route('appointmentConfirm')}}">
        @csrf

        <div class="form-row appointment-form-row ">



            <div class="col-sm-12">

                <h3 class="appointment-heading-3">
                    <p class="appointment-title"> Appointment</p>
                </h3>

            </div>



        </div>
        <div class="form-row appointment-form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left"> </div>

            <div class="col-sm-5">

                <h6 class="appointment-heading-6"><span class="req_color">*</span>Field (s) are required.</h6>

            </div>


            <div class="col-sm-2">

            </div>

        </div>


        <div class="form-row appointment-form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label class="appointment-form-label" for="name "> Name <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5 appointment-form-group ">

                <input type="text" class="form-control appointment-form-control" id="name" name="name"
                    placeholder=" Type Your Name" value="{{Auth::user()->name}}" required />

            </div>

        </div>



        <div class="form-row appointment-form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label class="appointment-form-label" for="input-Email">Phone/Email <span class="req_color">*</span>
                </label>

            </div>

            <div class="form-group col-sm-5 appointment-form-group">

                <input type="text" class="form-control appointment-form-control" id="input-Email" name="phone_number"
                    placeholder="Type Your Phone or Email" value="{{Auth::user()->phone}}" required />

            </div>

        </div>


        <div class="form-row appointment-form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="input-Gender" class="appointment-form-label">Gender <span class="req_color">*</span>
                </label>

            </div>

            <div class="form-group col-sm-5 appointment-form-group">

                <select class="form-control appointment-form-control" name="sex" id="input-Gender">
                    <option value="male" name="">Male</option>
                    <option value="female" name="">Female</option>
                    <option value="other" name="">Other</option>

                </select>

            </div>

        </div>







        <div class="form-row appointment-form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label class="appointment-form-label" for="department">Department<span class="req_color">*</span>
                </label>

            </div>

            <div class="form-group col-sm-5 appointment-form-group">

                <select class="form-control appointment-form-control" id="department" name="department">

                    <option selected>Choose...</option>

                    @foreach ($departments as $department)
                    <option value="{{$department->name}}" name="">{{ucfirst($department->name)}}</option>
                    @endforeach
                    {{--                     
                        <option value="Cardiology" name="">Cardiology</option>
                        <option value="Dental & Maxillofacial Surgery " name="">Dental & Maxillofacial Surgery </option>
                        <option value="Endocrinology & Diabetology" name="">Endocrinology & Diabetology</option>
                        <option value="Neurology" name="">Neurology</option>
                        <option value="Nephrology" name="">Nephrology</option>
                        <option value="Nephrology" name="">Nephrology</option>
                        <option value="psychology" name="">psychology</option>
                        <option value="Obstetrics & Gynaecology" name="">Obstetrics & Gynaecology</option>
                        <option value="Ophthalmology" name="">Ophthalmology</option>
                        <option value="Rheumatology" name="">Rheumatology</option>
                        <option value="Urology" name="">Urology</option> --}}

                </select>

            </div>

        </div>


        <div class="form-row appointment-form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="doctor" class="appointment-form-label">Doctor <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5 appointment-form-group">

                <select class="form-control appointment-form-control" id="doctor" name="doctor">
                </select>

                </select>

            </div>

        </div>



        <div class="form-row appointment-form-row">

            <div class="col-sm-2">

            </div>

            <div class="col-sm-3 text-left">

                <label class="appointment-form-label" for="input-Zip">Date <span class="req_color">*</span> </label>

            </div>

            <div class=" form-group col-sm-5 appointment-form-group">

                <input type="date" class="form-control appointment-form-control   date_padd_top" name="date"
                    id="input-Zip" required />

            </div>

        </div>


        <div class="form-row appointment-form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label class="appointment-form-label" for="input-Address">Address <span class="req_color">*</span>
                </label>

            </div>

            <div class=" form-group col-sm-5 appointment-form-group">

                <input type="text" class="form-control appointment-form-control" id="input-Address" name="address"
                    placeholder=" Type Your Full Address" required />

            </div>

            <div class="col-sm-3">

            </div>

        </div>



        <div class="form-row appointment-form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left"> </div>

            <div class="form-group col-sm-5 appointment-form-group">

                <a type="text" class="btn appointment-btn" href="{{route('/')}}" style="color:white;">Back </a>

                <button type="submit" class="btn appointment-btn" style=" color:white;">Appointment</button>

            </div>

        </div>

    </form>
</div>
</div> 
@endsection
@section('css')
<style>
    .main-content {

        background-image: url("img/nurse.jpg");
        background-attachment: fixed;
        height: 805px;



    }


    .main-content .container {

        max-width: 960px;
        margin-top: 35px;



    }

    .appointment-form {
        background: rgba(33, 30, 34, 0.3);
        height: 805px;
        margin-bottom: 50px;
    }

    .appointment-form-row {


        margin-bottom: -28px;

    }

    .appointment-heading-3 {

        font-size: 16px;


    }


    p.appointment-title {

        max-width: 85%;
        margin-top: 40px;
        margin: 0 auto;
        margin-top: 62px;
        padding: 3px;
        border-radius: 5px;
        font-size: 30px;
        margin-bottom: 35px;
        text-align: center !important;
        background-color: powderblue;
        line-height: 40px;


    }


    .appointment-heading-6 {

        font-size: 16px;
        padding-bottom: 40px;
        padding-top: 30px;

    }




    .req_color {

        color: red;
        font-size: 20px;

    }


    .appointment-form-label {

        font-size: 17px;
        font-weight: normal;
        padding-left: 95px;
        padding-top: 6px;
        font-size: 16px;
        color: black;

    }

    .appointment-form-group {

        margin-bottom: 4rem;

    }



    .appointment-form-control {

        width: 95%;
        height: 42px;
        font-size: 14px;
        margin-left: 0px;

    }


    .appointment-form-control.btn.btn-block {

        background-color: #563D7C;
        color: white;
        padding-top: 10px;
        padding-bottom: 35px;
        width: 85%;

    }


    .appointment-btn {


        background-color: #22BAA0;
        color: white;
        padding-top: 7px;
        margin-right: 23px;
        font-size: 14px;


    }


    @media (min-width: 767.98px) and (max-width: 900px) {


        .appointment-form-label {

            padding-left: 65px;

        }

    }



    @media (min-width:576px) and (max-width: 767.98px) {


        .main-content {

            background-position: top center;

        }


        .appointment-form-label {

            padding-left: 25px;
            font-size: 16px;

        }

    }


    @media (min-width: 575px) and (max-width: 675px) {

        .main-content {

            background-position: top center;

        }

        .appointment-form-label {

            padding-left: 10px;
            font-size: 16px;

        }

    }

    @media (min-width: 200px) and (max-width: 575px) {



        .main-content {

            background-position: top center;
            height: 1130px;
        }

        .appointment-form {

            height: 1130px;

        }


        .appointment-heading-6 {

            text-align: center;

        }

        .appointment-form-label {

            padding-left: 57px;
            font-size: 17px;
            font-weight: normal;
            padding-top: 6px;
            font-size: 16px;

        }

        .appointment-form-control {

            width: 70%;
            margin-left: 55px;
            font-size: 14px;

        }


        .appointment-form-row {

            text-align: center;

        }


    }
</style>
@endsection
@section('js')
<script>
    function chooseDoctor(obj) {
        var value = $('#doctor').val();
        if(value) {
            // console.log()
            alert('doctor is inserted'+value);
        }else {
            alert('please choose department first' + value);
        }
    }
    $('#department').on('click',function() {
        var value = $(this).val();
        // console.log(value);
        $.post(`{{route('findDoctorWithDept')}}`,{department: value},function(data){
            // $('#doctor').append($('<option/>',{
            //     value: data.name,
            //     text: data.name
            // }));
            // console.log(data);
            $.each(data,function(i,value){
                $('#doctor').append($('<option/>',{
                    value: value.user_id,
                    text: value.user.name
                }));
                // console.log(value.user);
            });
        });
    });
    $('#frm-create-appointment').on('submit',function(e){
        e.preventDefault();
        var data = $(this).serializeArray();
        // console.log(data);
        $(this).get(0).submit();
    });
</script>
@endsection