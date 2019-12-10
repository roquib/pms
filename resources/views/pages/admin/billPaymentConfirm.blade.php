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
                <h1>About Patient</h1>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Gender</th>
                      <th>Address</th>
                      <th>Date</th>
                      <th>Department</th>
                      <th>doctor</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>{{ $patient->id }}</td>
                      <td>{{ $patient->name }}</td>
                      <td>{{ $patient->phone }}</td>
                      <td>{{$patient->gender}}</td>
                      <td>{{ $patient->address }}</td>
                      <td>{{ $patient->date }}</td>
                      <td>{{ $patient->department }}</td>
                      <td>{{ $patient->user($patient->doctor)->name }}</td>
                    </tr>
                  </tbody>
                </table>
                @php
                $index = 1;
                $test_total = 0;
                $test = 0;
                $medicine = 0;
                $medicine_total = 0;
                @endphp
                @foreach ($prescriptions as $prescription)
                <h1>Prescription Table {{$index++}}</h1>

                @foreach ($prescription->tests($prescription->patient_id,$prescription->id) as $pres)
                {{-- <li>
                  {{$pres->name}}
                </li> --}}
                <table class="table">
                  <tbody>
                    <tr>
                      <td>{{$pres->name}}</td>
                      <td>{{$prescription->test_price($pres->name)}}</td>
                      @php
                      $test += $prescription->test_price($pres->name);
                      @endphp
                    </tr>
                  </tbody>
                </table>
                @endforeach
                <div class="float-right">Test Total: {{$test}}</div>
                @php
                $test_total += $test;
                $test = 0;
                @endphp
                @foreach ($prescription->medicines($prescription->patient_id,$prescription->id) as $pres)
                <table class="table">
                  <tr>
                    <td>{{$pres->name}}</td>
                    <td>{{$prescription->medicine_price($pres->name)}}</td>
                    @php
                    $medicine += $prescription->medicine_price($pres->name);
                    @endphp
                  </tr>
                </table>
                @endforeach
                <div class="float-right">Medicine Total: {{$medicine}}</div>
                @php
                $test_total += $medicine;
                $medicine = 0;
                @endphp
                @endforeach
                <p style="text-align: right;">
                  Total: {{$test_total}}
                </p>
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