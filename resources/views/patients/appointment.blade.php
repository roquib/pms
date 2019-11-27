@extends('layouts.master')
@section('content')
<div class="container">

    <form>

        <div class="form-row ">



            <div class="col-sm-12">

                <h6>
                    <p class="text-center  "> Appointment</p>
                </h6>

            </div>



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

                <label for="input-first-name ">First Name <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5  ">

                <input type="text" class="form-control" id="input-first-name" name="first_name"
                    placeholder=" Type Your First Name" required />

            </div>

        </div>



        <div class="form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="input-last-name">Last Name</label>

            </div>

            <div class="form-group col-sm-5 ">

                <input type="text" class="form-control" id="input-last-name" name="last_name"
                    placeholder=" Type Your Last Name" />

            </div>

        </div>



        <div class="form-row ">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="input-Email">Phone/Email <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5">

                <input type="text" class="form-control" id="input-Email" name="phone_number"
                    placeholder="Type Your Phone or Email" required />

            </div>

        </div>



        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="input-Address">Address <span class="req_color">*</span> </label>

            </div>

            <div class=" form-group col-sm-5">

                <input type="text" class="form-control" id="input-Address" name="address"
                    placeholder=" Type Your Full Address" required />

            </div>

            <div class="col-sm-3">

            </div>

        </div>



        <div class="form-row">

            <div class="col-sm-2"> </div>

            <div class="col-sm-3 text-left">

                <label for="input">Doctor <span class="req_color">*</span> </label>

            </div>

            <div class="form-group col-sm-5">

                <select class="form-control">


                    <option selected>Choose-----</option>

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
                    <option value="Urology" name="">Urology</option>

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

            <div class="col-sm-3 text-left"> </div>

            <div class="form-group col-sm-5">

                <a type="text" class="btn" href="index.html" style="color:white;">Back </a>

                <button type="submit" class="btn" style=" color:white;">Submit</button>

            </div>

        </div>

    </form>

</div>
@endsection