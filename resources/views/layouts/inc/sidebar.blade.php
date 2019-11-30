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
                        <span>{{Auth::user()->name}}<br><small>
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

            <li><a href="{{route('allPatient')}}"><span class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Patients</p>
                </a></li>


            <!--page admin elements-->
            @can('isAdmin')
            <li><a href="{{route('all-admins')}}"><span class="menu-icon glyphicon glyphicon-briefcase"></span>
                    <p>Admin</p>
                </a></li>


            <!--form elements
                        
                        
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-edit"></span><p>Forms</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-upload.html">File Upload</a></li>
                                <li><a href="form-image-crop.html">Image Crop</a></li>
                                <li><a href="form-select2.html">Select2</a></li>
                                <li><a href="form-x-editable.html">X-editable</a></li>
                            </ul>
        
                        </li>
                        
                        
                        
                        -->




            <!--login form-->




            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-log-in"></span>
                    <p>Login</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="login.html">Login Form</a></li>
                    <li><a href="register.html">Register Form</a></li>
                    <li><a href="forgot.html">Forgot Password</a></li>

                </ul>
            </li>





            <!--google map-->

            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-map-marker"></span>
                    <p>Maps</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="maps-google.html">Google Maps</a></li>

                </ul>
            </li>




            <!--extra manu-->

            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon glyphicon glyphicon-gift"></span>
                    <p>Extra</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">


                    <li><a href="calendar.html">Calendar</a></li>

                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </li>
            @endcan
        </ul>

    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->