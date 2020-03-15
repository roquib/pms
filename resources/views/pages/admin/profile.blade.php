@extends('layouts.admin')
@section('content')
<div class="profile-cover" {{--style="margin-top: -61px;"--}}>
    <div class="row">
        <div class="col-md-3 profile-image">
            <div class="profile-image-container">
                @if(Auth::user()->photo == null)
                <img src="{{asset('admin/assets/images/default.png')}}" alt="">
                @endif
            </div>
        </div>

    </div>
</div>




<div id="main-wrapper">
    <div class="row">
        <div class="col-md-3 user-profile">
            <h3 class="text-center">{{Auth::user()->name}}</h3>
            <p class="text-center role-name--style">{{Auth::user()->role->name}}</p>
            <hr>
            <ul class="list-unstyled text-center">
                <li><i class="fa fa-phone m-r-xs"></i>{{Auth::user()->phone}}
                </li>
                <li>
                    <p><i class="fa fa-map-marker m-r-xs"></i>Melbourne, Australia</p>
                </li>
                <li>
                    <p>
                        <i class="fa fa-envelope m-r-xs"></i>
                        <a>{{Auth::user()->email}}</a>
                    </p>
                </li>

            </ul>
            {{-- {{dd(Auth::user())}} --}}
            <hr>

        </div>
        <div class="col-md-6 m-t-lg">


            <div class="profile-timeline">
                <ul class="list-unstyled">
                    <li class="timeline-item">
                        <div class="panel panel-white">
                            {{-- <div class="panel-body">
                                <div class="timeline-item-header">
                                    <img src="{{asset('admin/assets/images/avatar3.png')}}" alt="">
                            <p>Christopher palmer <span>Posted a Status</span></p>
                            <small>5 hours ago</small>
                        </div>
                        <div class="timeline-item-post">
                            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque
                                penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id
                                dolor id nibh ultricies vehicula.</p>

                            <button type="text" class="btn btn-primary">View</button>

                        </div>
            </div> --}}
        </div>
        </li>


        </ul>
    </div>
</div>

</div>
</div>
<div class="page-footer" style="background-color: cadetblue;">
    <p class="no-s text-center">2019<i> &copy; MD MOMEN SHEKH</i></p>
</div>
@endsection