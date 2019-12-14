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

<div class="input-group" style="
    text-align: center; margin: auto;padding-top: 30px;">
  <input type="text" name="search" id="search" class="form-control search-input search-design" placeholder="Search... "
    style="
               
                border-radius: 10px;
                line-height: 112px;
                height: 45px;
                background-color: black;
                margin: auto;
                font-size: 16px;
                font-style: italic;
                text-align: center;
                width: 142%;
                
            
        ">

</div><!-- Input Group -->


<div id="result" class="text-center">
  <ul id="list" style="list-style:none; font-size: 17px;
        padding-top: 35px;"></ul>
</div>
<div id="main-wrapper">
  <div class="row">
    <div class="invoice col-md-12">
      <div class="panel panel-white">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 text-right">


            </div>



            <!--table-->

            <div class="col-md-12">
              <table class="table table-striped text-center">

                <tr>
                  <th class="text-center" style="color: black;
                                        font-size: 16px;">Id</th>
                  <th class="text-center" style="color: black;
                                        font-size: 16px;">Name</th>
                  <th class="text-center" style="color: black;
                                         font-size: 16px;">Gender</th>
                  <th class="text-center" style="color: black;
                                         font-size: 16px;">Doctor</th>
                  <th class="text-center" style="color: black;
                                        nt-size: 16px;">Action</th>

                </tr>
                @foreach ($patients as $patient)
                <tr>
                  <td>{{$patient->id}}</td>
                  <td>{{$patient->name}}</td>
                  @php
                      $gender = $patient->patient($patient->id)
                  @endphp
                  <td>{{$gender}}</td>
                    @php
                    $doctor = $patient->patient($patient->id);
                    @endphp
                    {{-- <td>{{$patient->doctor($doctor->doctor)->name}}</td> --}}
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
<div class="page-footer" style="background-color: cadetblue;">
  <p class="no-s text-center" style="font-size: 15px;">2019<i> &copy; MD MOMEN SHEKH</i></p>
</div>
@endsection

@section('css')
<style>
  .search-design {
    /* width: 38px; */
    border-radius: 10px;
    line-height: 112px;
    height: 55px;
    background-color: black;
    margin: auto;
    /* text-align: center; */
    font-size: 20px;
    font-style: italic;
  }
</style>
@section('js')
<script type="text/javascript">
  $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
            type : 'get',
            url : '{{URL::to('search')}}',
            data:{'search':$value},
            success:function(data){
                // console.log(data);
                // $('#search').autocomplete({
                //     source: data
                // });
                var patient = [];
                $.each(data, function(key,value){
                    if(value.id ==null) {
                        var val = `<li>${value.name}</li>`;
                        patient.push(val);
                    }else {
                        var val = `<li><a href="/patients/${value.id}">${value.name}</a></li>`;
                        patient.push(val);
                    }
                });
                // $( "#search" ).autocomplete({
                // source: patient
                // });
                $('ul#list').html(patient);
            }
            });
            })
</script>

@endsection