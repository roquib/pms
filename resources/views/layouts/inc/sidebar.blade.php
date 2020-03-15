<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <div class="sidebar-header">
            <div class="sidebar-profile">
                <a href="javascript:void(0);" id="profile-menu-link">
                    <div class="sidebar-profile-image">

                        <!--profile img-->
                        @if(Auth::user()->photo == null)
                        <img class="img-circle avatar" src="{{asset('admin/assets/images/default.png')}}" alt="">
                        @endif
                    </div>
                    <div class="sidebar-profile-details">
                        <span class="user-detail-style">{{Auth::user()->name}}<br><small class="admin-style">
                                @can('isAdmin')
                                Admin
                                @elsecan('isDoctorAdmin')
                                Doctor Admin
                                @elsecan('isHelpDesk')
                                HelpDesk Admin
                                @elsecan('isBillAdmin')
                                Bill Admin
                                @elsecan('isTestAdmin')
                                Test Admin
                                @endcan
                            </small></span>
                    </div>
                </a>
            </div>
        </div>

        <ul class="menu accordion-menu">

            <li class="active"><a href="{{route('dashboard')}}" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-home"></span>
                    <p>Dashboard</p>
                </a></li>

            <li><a href="{{route('profile')}}" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-user"></span>
                    <p>Profile</p>
                </a></li>


            <!--page patients elements-->

            <li>
                @can('isAdmin')
                <a href="{{route('admin.show.patient.all')}}"><span
                        class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Patients</p>
                </a>
                @elsecan('isDoctorAdmin')
                <a href="{{route('allPatient')}}"><span class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Patients</p>
                </a>
                @elsecan('isHelpDesk')
                @elsecan('isBillAdmin')
                <a href="{{route('bill.admin')}}"><span class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Patients</p>
                </a>
                @elsecan('isTestAdmin')
                <a href="{{route('allPatient')}}"><span class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Patients</p>
                </a>
                @elsecan('isMedicineAdmin')
                <a href="{{route('patient.get')}}"><span class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Patients</p>
                </a>
                @elsecan('isReception')
                <a href="{{route('reception')}}"><span class="menu-icon glyphicon glyphicon-edit"></span>
                    <p>reception</p>
                </a>
                @endcan
            </li>


            <!--page admin elements-->
            @can('isAdmin')
            <li>
                <a href="{{route('all-admins')}}"><span class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Admin</p>
                </a>
            </li>



            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-log-in"></span>
                    <p>Registration </p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{route('registration.form.doctor')}}">Registration Form Doctor</a></li>
                    <li><a href="{{route('registration.form.bill')}}">Register Form Bill</a></li>
                    <li><a href="{{route('registration.form.medicine')}}">Register Form Medicine</a></li>
                    <li><a href="{{route('registration.form.test')}}">Register Form Test</a></li>

                </ul>
            </li>



            <li>
                <a href="{{URL::to('/admin/allroom')}}"><span class="menu-icon glyphicon glyphicon-th"></span>
                    <p>Room</p>
                </a>
            </li>




            <li>
                <a href="{{URL::to('/admin/alltest')}}"><span class="menu-icon glyphicon glyphicon-flash"></span>
                    <p>Test</p>
                </a>
            </li>





            <li>
                <a href="{{URL::to('/admin/allmedicine')}}" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-gift"></span>
                    <p>Medicine</p></span>
                </a>

            </li>





            <!--google map-->

            {{-- <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-map-marker"></span>
                    <p>Maps</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="maps-google.html">Google Maps</a></li>

                </ul>
            </li> --}}




            <!--extra manu-->


            @endcan
        </ul>

    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->