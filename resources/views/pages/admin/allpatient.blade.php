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
                                            <div class="dropdown btn-group">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    data-toggle="dropdown">Prescription
                                                    <span class="caret"></span></button>
                                                <ul class="dropdown-menu"
                                                    style="background-color:#6A5FAC; color: black;">
                                                    <li><a style="color: black;"
                                                            class="{{($id ?? '' == null) ? "disabled" : ''}}"
                                                            href="{{route('prescription.doc',['id'=>1,'patientid' => $patient->id])}}">Prescription
                                                            1</a>
                                                    </li>
                                                    <li><a style=" color: black;"
                                                            href="{{route('prescription.doc',['id'=>2,'patientid' => $patient->id])}}">Prescription
                                                            2</a>
                                                    </li>
                                                    <li><a style="color: black;"
                                                            href="{{route('prescription.doc',['id'=>3,'patientid' => $patient->id])}}">Prescription
                                                            3</a>
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
                        var val = `<li><a href="/patient/${value.id}">${value.id}</a></li>`;
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