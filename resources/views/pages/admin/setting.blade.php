@extends('layouts.admin')
@section('content')
<user-profile userid="{{Auth::user()->id}}"></user-profile>
@endsection