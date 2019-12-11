@extends('layouts.admin')
@section('content')
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
              <h1 class="text-center"
								style="color: azure;opacity: 1;background-color: cadetblue;line-height: 52px;border-radius: 4px;margin-bottom: 45px;">
								About Patient</h1>
              <table class="table">
                <thead>
                  <tr style="color: black;
                  font-size: 16px;">
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
                  <tr style="font-size: 15px;text-transform: capitalize;">
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
            </div>


            <div class="col-md-6">
              @php
              $index = 1;
              $test_total = 0;
              $test = 0;
              $medicine = 0;
              $medicine_total = 0;
              @endphp
              @foreach ($prescriptions as $prescription)
              <h1 class="text-center"
              style="color: azure;opacity: 1;background-color: cadetblue;line-height: 52px;border-radius: 4px;margin-bottom: 45px;">Prescription {{$index++}}</h1>

              <p style="text-align: center;text-transform: capitalize;font-size: 21px;color: white;background-color: orange;width: 20%;margin: auto;margin-bottom: 25px;margin-top: 90px;border-radius: 3px;line-height:36px;">test</p>

              @foreach ($prescription->tests($prescription->patient_id,$prescription->id) as $pres)
              {{-- <li>
                  {{$pres->name}}
              </li> --}}
              <table class="table">
                <tbody>
                  
                  <tr style="font-size: 15px;text-transform: capitalize;">
                    <td style="width: 50%;">{{$pres->name}}</td>
                    <td style="width: 50%;">{{$prescription->test_price($pres->name)}}</td>
                    @php
                    $test += $prescription->test_price($pres->name);
                    @endphp
                  </tr>
                </tbody>
              </table>
              @endforeach
              <div class="float-right" style="font-size: 16px;text-transform: capitalize;background-color: green;color: white;text-align: center;border-radius: 3px; line-height:32px;">Test Total: {{$test}}</div>

              <p style="text-align: center;text-transform: capitalize;font-size: 21px;color: white;background-color: orange;width: 20%;margin: auto;margin-bottom: 25px;margin-top: 90px;border-radius: 3px;line-height:36px;">medicine</p>
              @php
              $test_total += $test;
              $test = 0;
              @endphp
              @foreach ($prescription->medicines($prescription->patient_id,$prescription->id) as $pres)
              <table class="table">
                <tr style="font-size: 15px;text-transform: capitalize;">
                  <td style="width: 50%;">{{$pres->name}}</td>
                  <td style="width: 50%;">{{$prescription->medicine_price($pres->name)}}</td>
                  
                  @php
                  $medicine += $prescription->medicine_price ($pres->name);
                  @endphp
                </tr>
              </table>
              @endforeach
              
              <div class="float-right" style="font-size: 16px;text-transform: capitalize;background-color: green;color: white;text-align: center;border-radius: 3px; line-height:32px;margin-bottom:100px;">Medicine Total: {{$medicine}}</div>
              @php
              $test_total += $medicine;
              $medicine = 0;
              @endphp
              @endforeach
              <p style="text-align: right;font-size: 24px;text-transform: capitalize;background-color: teal;color: white;text-align: center;border-radius: 3px; line-height:50px;margin-bottom:100px;">
                Total Taka: {{$test_total}}
              </p>
            </div>




            <div class="col-md-6">
                <h1 class="text-center"
								style="color: azure;opacity: 1;background-color: cadetblue;line-height: 52px;border-radius: 4px;margin-bottom: 45px;">
								Payment</h1>
              <table class="table">
                <thead>
                  <tr style="font-size: 15px;text-transform: capitalize;">
                    <th>Total</th>
                    <th>Pay</th>
                    <th>Due</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- <tr>
                      <th>{{$test_total}}</th>
                  <th>Not Paid</th>
                  <th>{{$test_total}}</th>
                  </tr> --}}

                  <tr style="font-size: 15px;text-transform: capitalize;">
                    <th>{{$total_payment}}</th>
                    <th>{{$pay_payment}}</th>
                    <th>{{$due_payment}}</th>
                  </tr>
                  {{-- <tr>
                      <th>{{$test_total}}</th>
                  <th>Not Paid</th>
                  <th>{{$test_total}}</th>
                  </tr> --}}
                </tbody>
              </table>
            </div>
            <div class="col-md-6" style="{{($due_payment == 0) ? "display:none" : ''}}">
              <h1>Payment Form</h1>
              <form action="{{route('pay')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="total">Total</label>
                  <input type="text" class="form-control" value="{{$test_total}}" readonly name="total"
                    placeholder="{{$test_total}}">
                </div>
                <div class="form-group">
                  <label for="total">Pay</label>
                  <input type="text" class="form-control" name="pay" placeholder="Pay">
                  <input type="hidden" name="patient_id" value="{{$patient->id}}">
                </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
              </form>
            </div>
            <div class="col-md-6" style="{{($due_payment == 0) ? "display:block" : 'display:none'}}">
              <h1 style="font-size: 22px;text-transform: capitalize;background-color: green;color: white;text-align: center;border-radius: 3px; line-height:50px;width: 48%;margin:auto;">Payment is done <i  class=" fa fa-check"> </i> </h1>
            </div>
          </div>
          <!--row-->
        </div>
      </div>
    </div>
  </div><!-- Row -->
</div><!-- Main Wrapper -->
<div class="page-footer" style="background-color: cadetblue;">
    <p class="no-s text-center" style="font-size: 15px;">2019<i> &copy; MD MOMEN SHEKH</i></p>
  </div>
@endsection