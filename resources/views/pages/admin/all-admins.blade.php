@extends('layouts.admin')
@section('content')
<div class="page-inner">
    <div class="page-title">
        <h3>Admin</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{route('dashboard')}}">Home</a></li>
                <li class="active">Admin</li>
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
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>

                                        </tr>
                                        @php
                                        $i = 1;
                                        @endphp
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        @can('isAdmin')
                                        <tr>
                                            <td>@php echo $i;$i++ @endphp</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->role->name}}</td>
                                            <td>
                                                <a href="{{route('view-admin',$user->id)}}"
                                                    class="btn btn-primary">View</a>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endcan
                                        @endforeach
                                        @can('isTestAdmin')
                                        <tr>
                                            <td>@php echo $i;$i++ @endphp</td>
                                            <td>{{Auth::user()->name}}</td>
                                            <td>{{Auth::user()->email}}</td>
                                            <td>{{Auth::user()->role->name}}</td>
                                            <td>
                                                <button type="text" class="btn btn-primary">View</button>
                                            </td>
                                        </tr>
                                        @endcan
                                        @can('isBillAdmin')
                                        <tr>
                                            <td>@php echo $i;$i++ @endphp</td>
                                            <td>{{Auth::user()->name}}</td>
                                            <td>{{Auth::user()->email}}</td>
                                            <td>{{Auth::user()->role->name}}</td>
                                            <td>
                                                <button type="text" class="btn btn-primary">View</button>
                                            </td>
                                        </tr>
                                        @endcan
                                        @can('isHelpDesk')
                                        <tr>
                                            <td>@php echo $i;$i++ @endphp</td>
                                            <td>{{Auth::user()->name}}</td>
                                            <td>{{Auth::user()->email}}</td>
                                            <td>{{Auth::user()->role->name}}</td>
                                            <td>
                                                <button type="text" class="btn btn-primary">View</button>
                                            </td>
                                        </tr>
                                        @endcan
                                        @can('isDoctorAdmin')
                                        <tr>
                                            <td>@php echo $i;$i++ @endphp</td>
                                            <td>{{Auth::user()->name}}</td>
                                            <td>{{Auth::user()->email}}</td>
                                            <td>{{Auth::user()->role->name}}</td>
                                            <td>
                                                <button type="text" class="btn btn-primary">View</button>
                                            </td>
                                        </tr>
                                        @endcan
                                    </tbody>
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
        <p class="no-s">2015 &copy; Modern by Steelcoders.</p>
    </div>
</div><!-- Page Inner -->
@endsection