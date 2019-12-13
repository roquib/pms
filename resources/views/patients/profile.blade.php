@extends('layouts.master')
@section('content')
<div class="container">
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
    </li>
    <li class="nav-item">
      <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit</a>
    </li>
  </ul>
  <div class="tab-content py-4">
    <div class="tab-pane active" id="profile">
      <div class="profile-cover">
        <div class="row">
          <div class="col-md-3 profile-image">
            <div class="profile-image-container">
              <img src="/admin/assets/images/default.png" alt="" />
            </div>
          </div>
        </div>
      </div>

      <div id="main-wrapper">
        <div class="row" v-for="user in users" :key="user.id">
          <div class="col-md-3 user-profile">
            <h3 class="text-center">{{ Auth::user()->name }}</h3>
            <p class="text-center">{{Auth::user()->role->name}}</p>
            <hr />
            <ul class="list-unstyled text-center">
              <li>
                <i class="fa fa-phone m-r-xs">{{Auth::user()->phone}}</i>
              </li>
              <li>
                <p>
                  <i class="fa fa-envelope m-r-xs"></i>
                  <a href="#">{{Auth::user()->email}}</a>
                </p>
              </li>
            </ul>
            <hr />
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
              style="color: azure;opacity: 1;background-color: cadetblue;line-height: 52px;border-radius: 4px;/* margin-bottom: 45px; */margin-top: 88px;text-align:center;">
              Prescription {{$index++}}</h1>

            <p
              style="text-align: center;text-transform: capitalize;font-size: 21px;color: white;background-color: orange;width: 20%;margin: auto;margin-bottom: 25px;margin-top: 90px;border-radius: 3px;line-height:36px;">
              test</p>

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
            <div class="float-right"
              style="font-size: 16px;text-transform: capitalize;background-color: green;color: white;text-align: center;border-radius: 3px; line-height:32px;">
              Test Total: {{$test}}</div>

            <p
              style="text-align: center;text-transform: capitalize;font-size: 21px;color: white;background-color: orange;width: 20%;margin: auto;margin-bottom: 25px;margin-top: 90px;border-radius: 3px;line-height:36px;">
              medicine</p>
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

            <div class="float-right"
              style="font-size: 16px;text-transform: capitalize;background-color: green;color: white;text-align: center;border-radius: 3px; line-height:32px;margin-bottom:100px;">
              Medicine Total: {{$medicine}}</div>
            @php
            $test_total += $medicine;
            $medicine = 0;
            @endphp
            @endforeach
            <p
              style="text-align: right;font-size: 24px;text-transform: capitalize;background-color: teal;color: white;text-align: center;border-radius: 3px; line-height:50px;margin-bottom:100px;margin-top:100px;">
              Total Taka: {{$test_total}}
            </p>
          </div>
        </div>
      </div>
      <!--/row-->
    </div>
    <div class="tab-pane " id="edit" style="width: 510px;margin: auto;">
      <form role="form" method="post" action="update_profile.php">
        <input type="hidden" name="student_id" />
        <div class="form-group row">
          <label class="col-lg-3 col-form-label form-control-label">Name</label>
          <div class="col-lg-9">
            <input class="form-control" value="{{Auth::user()->name}}" type="text" name="name" />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-3 col-form-label form-control-label">Email</label>
          <div class="col-lg-9">
            <input class="form-control" type="email" name="email" value="{{Auth::user()->email}}" />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-3 col-form-label form-control-label">Address</label>
          <div class="col-lg-9">
            <input class="form-control" type="text" name="address" value="{{$patient->address}}" />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-3 col-form-label form-control-label">Phone</label>
          <div class="col-lg-9">
            <input class="form-control" type="text" name="phone" value="{{Auth::user()->phone}}" />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-3 col-form-label form-control-label">Gender</label>
          <div class="col-lg-9">
            <input class="form-control" type="text" name="sex" value="{{$patient->gender}}" />
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-3 col-form-label form-control-label"></label>
          <div class="col-lg-9">
            <input type="submit" class="btn btn-primary" name="update_teacher" value="Update" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection