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
<div class="input-group" style="
    text-align: center; margin: auto;padding-top: 30px;">
    <input type="text" name="search" id="search" class="form-control search-input search-design"
        placeholder="Search... " style="
               
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

                                <tr  style="color: black;
                                font-size: 16px;">
                                    <th class="text-center">Patient Id</th>
                                    <th class="text-center">Patient Name</th>
                                    <th class="text-center">Doctor Name</th>
                                    <th class="text-center">Action</th>

                                </tr>
                                @foreach ($prescription as $pres)
                                @foreach ($pres->patients($pres->patient_id) as $patient)
                                <tr style="font-size: 15px;text-transform: capitalize;">
                                    <td>{{$patient->id}}</td>
                                    <td>{{$patient->name}}</td>
                                    <td>{{$pres->daktar($patient->doctor)->name}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('bill.payment.confirm',['id' => $patient->id])}}">View</a>
                                    </td>
                                </tr>
                                @endforeach
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
                        var val = `<li><a href="/patient/${value.id}/payment/confirm">${value.name}</a></li>`;
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