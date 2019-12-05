@extends('layouts.master')
@section('content')
<div class="container">

    <form id="frm-create-appointment" method="POST" action="{{route('appointmentConfirm')}}">
        @csrf
        <div class="form-row ">
            <div class="col-sm-12">

                <h6 class="display-4 text-center">Appointment
                </h6>

            </div>
            <h6 class="display-4">
                this is for testing
            </h6>
        </div>
        <div class="form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left"> </div>

            <div class="col-sm-5">

                <h6><span class="req_color">*</span>Field (s) are required.</h6>

            </div>


            <div class="col-sm-2">

            </div>

        </div>


        <div class="form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="name ">Name <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5  ">

                <input type="text" class="form-control" id="name" name="name" placeholder=" Type Your Name"
                    value="{{Auth::user()->name}}" required />

            </div>

        </div>

        <div class="form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="input-Email">Phone/Email <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5">

                <input type="text" class="form-control" id="input-Email" name="phone_number"
                    placeholder="Type Your Phone or Email" value="{{Auth::user()->phone}}" required />

            </div>

        </div>



        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="input">Gender <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5">

                <select class="form-control" name="sex">
                    <option value="male" name="">Male</option>
                    <option value="female" name="">Female</option>
                    <option value="other" name="">Other</option>

                </select>

            </div>

        </div>

        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="department">Department <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5">

                <select class="form-control" id="department" name="department">
                    <option selected>Choose-----</option>
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
        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="doctor">Doctor <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5">

                <select class="form-control" onclick="chooseDoctor(this)" id="doctor" name="doctor">
                </select>

            </div>

        </div>


        <div class="form-row">

            <div class="col-sm-2">

            </div>

            <div class="col-sm-3 text-left">

                <label for="input-Zip">Date <span class="req_color">*</span> </label>

            </div>

            <div class=" form-group col-sm-5">

                <input type="date" class="form-control date_padd_top" name="date" id="input-Zip" required />

            </div>

        </div>
        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="input-Address">Address <span class="req_color">*</span> </label>

            </div>

            <div class=" form-group col-sm-5">

                <textarea name="address" id="address" class="form-control"></textarea>

            </div>

            <div class="col-sm-3">

            </div>

        </div>


        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left"> </div>

            <div class="form-group col-sm-5">

                <a type="text" class="btn btn-primary" href="{{route('/')}}">Back </a>

                <button type="submit" class="btn btn-danger">Submit</button>

            </div>

        </div>

    </form>

</div>
@endsection
@section('css')
    <style>
        .display-4 {
            font-size: 48px;
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
    // $('#frm-create-appointment').on('submit',function(e){
    //     e.preventDefault();
    //     var data = $(this).serializeArray();
    //     console.log(data);
    // });
</script>
@endsection