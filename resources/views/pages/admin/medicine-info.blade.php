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
<div id="result" class="text-center">
  <ul id="list" style="list-style:none; font-size: 17px;
        padding-top: 35px;"></ul>
</div>
<div id="main-wrapper">
  @foreach ($save_medicines as $sm)
  <div class="container">
    <p>
      <label for="{{$sm->name}}">
        <input type="checkbox" id="{{$sm->name}}" class="btn btn-primary">{{$sm->name}}
      </label>
    </p>
  </div>
  @endforeach
  <div class="container">
    <input type="submit" value="Submit" class="btn btn-primary">
  </div>
</div><!-- Main Wrapper -->
<div class="page-footer">
  <p class="no-s text-center">2019<i> &copy; MD MOMEN SHEKH</i></p>
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
  $('#search').on('keyup', function() {
    $value = $(this).val();
    $.ajax({
      type: 'get',
      url: '{{URL::to('
      search ')}}',
      data: {
        'search': $value
      },
      success: function(data) {
        // console.log(data);
        // $('#search').autocomplete({
        //     source: data
        // });
        var patient = [];
        $.each(data, function(key, value) {
          if (value.id == null) {
            var val = `<li>${value.name}</li>`;
            patient.push(val);
          } else {
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