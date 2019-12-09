@extends('layouts.admin')
@section('content')
<div class="page-inner">
    <div class="page-title">
        <h3>Admin</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="active">Prescription</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="invoice col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 text-right">

                                <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                            </div>



                            <!--table-->

                            <div class="col-md-12 me" style="font-size: 20px;">
                                <div class="container">

                                    <form method="POST" action="{{route('prescription.store')}}">
                                        @csrf
                                        <div class="form-row ">

                                            <div class="col-sm-12">

                                                <h2>
                                                    <p class="text-center mt-5 ">Hospital Name:..</p>
                                                </h2>

                                            </div>



                                        </div>

                                        <div class="form-group row ">
                                            <div class="col-sm-3  ml-3">
                                                <h3 class="doctor_name">Doctor Name:-{{Auth::user()->name}}</h3>
                                                <h3 class="doctor_name">Specialty:- Neurologist</h3>
                                                <h3 class="doctor_name">Phone:- {{Auth::user()->phone}}</h3>
                                                <h3 class="doctor_name">date:- 20/12/16</h3>


                                            </div>



                                        </div>
                                        <hr style=" border: 1px solid #2B384E; " />

                                        <div class="form-group row ml-3 ">
                                            <div class="col-sm-3">Patients Id: {{$patient->id}}</div>
                                            <input type="hidden" name="patientid" value="{{$patient->id}}">
                                            <div class="col-sm-3">Name: {{$patient->name}}</div>
                                            <div class="col-sm-3">Sex: {{$patient->gender}}</div>
                                            <div class="col-sm-3">Age:...</div>
                                        </div>





                                        <div class="form-row ">

                                            <table class="table table-striped">
                                                <div class="tavle_hader text-center" style="margin:15px;">
                                                    <tr>
                                                        <th>Disease</th>
                                                        <th>Test</th>
                                                        <th>Medicine</th>
                                                        <th>Next appoinment</th>
                                                    </tr>

                                                </div>
                                                <tr>
                                                    <td>
                                                        <textarea class="form-control" name="disease" id=""
                                                            placeholder="Type your text" rows="3"
                                                            style=" width:90%;"></textarea>
                                                    </td>
                                                    <td>
                                                        {{-- <textarea class="form-control" name="test" id=""
                                                            placeholder="Type your text" rows="3"
                                                            style=" width:90%;"></textarea>  --}}
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" id="test" name="tests[]"
                                                                multiple="multiple">
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{-- <textarea class="form-control" name="medicine" id=""
                                                            placeholder="Type your text" rows="3"
                                                            style=" width:90%;"></textarea>  --}}
                                                        <div class="input-group mb-3">
                                                            <select class="custom-select" name="medicines[]"
                                                                id="medicine" multiple="multiple">
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="hidden" name="prescription_id" value="{{$id}}">
                                                        <input type="date" name="date" class="form-control"></p>
                                                        <input type="time" value="" name="time" class="form-control" />
                                                    </td>

                                                </tr>




                                            </table>

                                        </div>


                                        <div class="form-row">



                                            <div class="form-group col-sm-12 text-right">

                                                <a type="text" class="btn back" href="index.html">Back </a>

                                                <button type="submit" class="btn">Submit</button>

                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>




                        </div>
                        <!--row-->
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
    </div>
</div><!-- Page Inner -->
@endsection
@section('css')
<style>
    .me {
        background-position: top;
        background-repeat: no-repeat;
        margin-top: 70px;
    }
</style>
@endsection
@section('js')
<script>
    loadTests();
    loadMedicines();
    function loadTests() {
        $.post(`{{route('test')}}`,function(data){
        $.each(data,function(i,ll){
            $('#test').append($('<option/>',{
                value: ll.name,
                text: ll.test
            }));
        });
        });
    }
    function loadMedicines() {
        $.post(`{{route('medicine')}}`,function(data){
        $.each(data,function(i,ll){
            $('#medicine').append($('<option/>',{
                value: ll.name,
                text: ll.name
            }));
        });
        });
    }
</script>
@endsection