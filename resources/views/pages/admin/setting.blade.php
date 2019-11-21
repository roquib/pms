@extends('layouts.admin')
@section('content')
<div class="page-inner">
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
                        <p class="text-center">{{Auth::user()->role->name}}</p>
                        <hr>
                        <ul class="list-unstyled text-center">
                            <li><i class="fa fa-phone m-r-xs"></i>017++
                            </li>
                            <li>
                                <p><i class="fa fa-map-marker m-r-xs"></i>Melbourne, Australia</p>
                            </li>
                            <li>
                                <p>
                                    <i class="fa fa-envelope m-r-xs"></i>
                                    <a href="#">example@mail.com</a>
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
                                        <div class="panel-body">
                                            <div class="timeline-item-header">
                                                <img src="{{asset('admin/assets/images/avatar3.png')}}" alt="">
                                                <p>Christopher palmer <span>Posted a Status</span></p>
                                                <small>5 hours ago</small>
                                            </div>
                                            <div class="timeline-item-post">
                                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum
                                                    sociis natoque
                                                    penatibus et magnis dis parturient montes, nascetur
                                                    ridiculus mus. Nullam id
                                                    dolor id nibh ultricies vehicula.</p>

                                                <button type="text" class="btn btn-primary">View</button>

                                            </div>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!--/row-->
        </div>
        <div class="tab-pane" id="edit">
            <form role="form" method="post" action="update_profile.php">
                <input type="hidden" name="student_id" />
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">First name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="first_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="last_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Address</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="address" placeholder="address">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">City</label>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" name="city" placeholder="City">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-9">
                        <input type="reset" class="btn btn-secondary" value="Cancel">
                        <input type="submit" class="btn btn-primary" name="update_teacher" value="Update">
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="col-lg-4 order-lg-1 text-center">
                <img width="150" height="150" src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block"
                    alt="avatar">
                <h6 class="mt-2">Upload a different photo</h6>
                <label class="custom-file">
                    <form enctype="multipart/form-data" action="upload_photo.php" method="post">
                        <input type="hidden" name="teacher_id" value="">
                        <input type="file" id="upload_profile" name="upload_profile" accept="image/*"
                            onchange="loadFile(event)" class="custom-file-input"> <br> <img id="output" width="40%"
                            height="40%">
                        <span class="custom-file-control btn btn-danger mb-2">Choose file</span> <br>
                        <script>
                            var loadFile = function(event) {
                                var output = document.getElementById('output');
                                output.src = URL.createObjectURL(event.target.files[0]);
                            };
                        </script>
                        <input type="submit" name="upload_photo" class="upload_photo" value="Upload Photo" class="my-2">
                    </form>

                </label>
            </div> --}}
</div><!-- Page Inner -->
@endsection