@extends('layouts.admin')
@section('content')
<div class="page-inner">
    <div class="page-title">
        <h3>Patients</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Patients</li>
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

                            <div class="col-md-12">
                                <table class="table table-striped text-center">

                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Age</th>
                                        <th class="text-center">Action</th>

                                    </tr>
                                    @foreach ($patients as $patient)
                                    <tr>
                                        <td>{{$patient->id}}</td>
                                        <td>{{$patient->name}}</td>
                                        <td>{{$patient->gender}}</td>
                                        <td>
                                            <a href="{{route('showPatient',$patient->id)}}"
                                                class="btn btn-primary">View</a>
                                            <button type="text" class="btn btn-danger">Delete</button>

                                            <div class="dropdown btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-toggle="dropdown">Prescription
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu"
                                                    style="background-color:#6A5FAC; color: black;">
                                                    <li><a style="color: black;"
                                                            href="{{route('prescription.doc',1)}}">Prescription
                                                            1</a>
                                                    </li>
                                                    <li><a style=" color: black;"
                                                            href="{{route('prescription.doc',2)}}">Prescription 2</a>
                                                    </li>
                                                    <li><a style="color: black;"
                                                            href="{{route('prescription.doc',3)}}">Prescription 3</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                </table>
                            </div>




                        </div>
                        <!--row-->
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s text-center">2019<i> &copy; MD MOMEN SHEKH</i></p>
    </div>
</div>
@endsection