@extends('layouts.admin')
@section('content')
<div class="page-title">
    <h3>Patients</h3>
    <div class="page-breadcrumb">
        <ol class="breadcrumb">
            <li><a href="{{route('dashboard')}}">Home</a></li>
            <li class="active">Patients</li>
        </ol>
    </div>
</div>
<div class="input-group">
    <input type="text" name="search" id="search" class="form-control search-input" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i
                class="fa fa-times"></i></button>
    </span>
</div><!-- Input Group -->
<div id="result">
    <ul id="list"></ul>
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
                                    <th class="text-center">Patient Id</th>
                                    <th class="text-center">Patient Name</th>
                                    <th class="text-center">Doctor Name</th>
                                    <th class="text-center">Action</th>

                                </tr>
                                @foreach ($prescription as $pres)
                                <tr>
                                    <td>{{$pres->patient->id}}</td>
                                    <td>{{$pres->patient->name}}</td>
                                    <td>{{$pres->doctr($pres->user_id)->name}}</td>
                                    <td>
                                        <a href="{{route('showPatient',$pres->patient->id)}}"
                                            class="btn btn-primary">View</a>
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
@endsection