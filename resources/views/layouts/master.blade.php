<!DOCTYPE HTML>

<html lang="en-US">

<head>

    <meta charset="UTF-8">

    <title>Demo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{asset('patient/style.css')}}" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>


<body>
    {{-- header --}}
    @include('patients.header')

    <script>
        $(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();   
		});
    </script>

    @include('patients.carousel')

    <!--Carousel Script-->

    <script>
        $('.carousel').carousel({

		interval :2000
		});
		
    </script>





    <div class="middle">



        <div class="container">




            <div class="form-row ">


                <div class="col-sm-12 text-center mt-5 ">



                    <span class="middle_header">Our service
                        <br />
                        <hr class="hr" />



                    </span>

                </div>
            </div>






            <div class="form-row ">


                <div class="col-sm-3 text-center mt-5">

                    <img class="heart_logo" src="{{asset('patient/img/heart.jpg')}}" width="120" height="120" alt="" />
                    <br />
                    <h4 class="heart_title"> Cardio Monitoring</h4><br />

                    <span class="heart_contant  text-left"> Please see our doctos whose are very expert, scholar,
                        experienced and coparative minded to give better services to their patients. </span>

                </div>





                <div class="col-sm-3 text-center mt-5">

                    <img class="appointment_logo" src="{{asset('patient/img/appointment.jpg')}}" width="120"
                        height="120" alt="" />
                    <br />
                    <h4 class="appointment_title"> Make an appoinment</h4><br />

                    <span class="appointment_contant  text-left"> We explain the common causes of pain in different
                        parts of the body, how they’re diagnosed and the importance of self-help measures</span>

                </div>



                <div class="col-sm-3 text-center mt-5">

                    <img class="unity_logo" src="{{asset('patient/img/unity.jpg')}}" width="120" height="120" alt="" />
                    <br />
                    <h4 class="unity_title"> Community Programs</h4><br />

                    <span class="unity_contant  text-left"> Custom Services post type allows you display a variety of
                        medical services for a large hospital as well as for a small private clinic.</span>

                </div>


                <div class="col-sm-3 text-center mt-5">

                    <img class="help_logo" src="{{asset('patient/img/help.jpg')}}" width="120" height="120" alt="" />
                    <br />
                    <h4 class="help_title"> Emergency Help</h4><br />

                    <span class="help_contant  text-left">Custom Services post type allows you display a variety of
                        medical services for a large hospital as well as for a small private clinic.</span>

                </div>


            </div>

        </div>











        <div class="container">




            <div class="form-row ">


                <div class="col-sm-12 text-center mt-5 header">



                    <span class="middle_header">Specialist Doctor
                        <br />
                        <hr class="hr" />



                    </span>

                </div>
            </div>






            <div class="form-row ">




                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Prof.Dr. Md.Mohamad Shekh <br />
                        <b>Specialist:</b> Cardiology. <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, MBChB, MBBCh)


                    </span>
                </div>



                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Prof.Dr.Robel khan <br />
                        <b>Specialist:</b> Dental & Maxillofacial Surgery <br />
                        <b>Degree:</b>
                        (MBBS, DMD, DDS)


                    </span>
                </div>


            </div>



            <div class="form-row ">




                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Prof.Dr.Sormila <br />
                        <b>Specialist:</b> Endocrinology & Diabetology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, D.O)


                    </span>
                </div>



                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Prof.Dr.Sazzad Hossin <br />
                        <b>Specialist:</b> Neurology <br />
                        <b>Degree:</b>
                        (MBBS, M.D,NDD,BSMM)


                    </span>
                </div>


            </div>


            <div class="form-row ">




                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Prof.Dr.Jakir Hossien <br />
                        <b>Specialist:</b> Nephrology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, D.O, NBPO)


                    </span>
                </div>



                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Prof.Dr.Sabbir Hossien <br />
                        <b>Specialist:</b> Obstetrics & Gynaecology<br />
                        <b>Degree:</b>
                        (MBBS, M.D,NDD,OBBS)


                    </span>
                </div>


            </div>



            <div class="form-row ">




                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Prof.Dr.Songita <br />
                        <b>Specialist:</b> Rheumatology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, RDMC, D.O)


                    </span>
                </div>



                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Prof.Dr.Rony Ahmaed<br />
                        <b>Specialist:</b> Urology <br />
                        <b>Degree:</b>
                        (MBBS, M.D,NDD,BCUM)


                    </span>
                </div>


            </div>



            <div class="form-row ">




                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Md.Mohan Shekh <br />
                        <b>Specialist:</b> Ophthalmology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, MBChB, MBOP)


                    </span>
                </div>



                <div class="col-sm-3 text-center mt-5">

                    <a href=""><img class="f_d_img" src="{{asset('patient/img/ddd.jpg')}}" alt="" /></a>

                </div>

                <div class="col-sm-3 mt-5 s_doctor_title">
                    <h4></h4>
                    <span class="s_doctor_contant  text-left">

                        <b>Name:</b> Md. Nazmul Islam <br />
                        <b>Specialist:</b> psychology <br />
                        <b>Degree:</b>
                        (MBBS, BMBS, MBphB, MCPH)


                    </span>
                </div>


            </div>

        </div>



    </div>



    <!--footer-->

    <div class="page-inner">

        <div class="container1">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            <div class="map m-auto" style="height: 450px; width: 80%; ">

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.6078275855266!2d90.39795401457356!3d23.86805588453151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c424e57431ab%3A0x8f68ee5d61cd9c5!2sAzampur%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1572416394572!5m2!1sen!2sbd"
                                    width="100%" height="400" frameborder="0" style="border:0;"
                                    allowfullscreen=""></iframe>


                            </div>
                            <div class="row footer_row">
                                <div class="col-md-6">
                                    <h3 id="contact">Contact Info</h3>
                                    <p class="footer_content">Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                                        rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam
                                        quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio
                                        et ante tincidunt tempus.</p>
                                    <h3>Address</h3>
                                    <address>
                                        <strong>Hospital Name</strong><br>
                                        Address:-BNS-Center,Uttara,Dhaka-1230.<br>
                                        Phone:-01786356432<br>
                                        Gmail:-Mdmomankhan63@gmail.com
                                        <br>

                                    </address>
                                    <address>
                                        <strong>Full Name</strong><br>
                                        Gmail:-Mdmomankhan63@gmail.com<a href="mailto:info@mdmomankhan@gmail.com"
                                            class="btn btn-warning mail">Mail</a>
                                    </address>


                                    <p class="footer_content">Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                                        rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam
                                        quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio
                                        et ante tincidunt tempus.</p>

                                    <form class="m-t-md footer_form">

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="4=6" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p class="no-s text-center">2015 &copy; Hospital Name</p>
        </div>
    </div><!-- Page Inner -->
    <div class="cd-overlay"></div>
    </div>

    <!-- Javascripts -->
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzjeZ1lORVesmjaaFu0EbYeTw84t1_nek"></script>
</body>

</html>