<div class="container1">
    <div class="row">
        <div class="col-md-12">
            <div class="map m-auto">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.6078275855266!2d90.39795401457356!3d23.86805588453151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c424e57431ab%3A0x8f68ee5d61cd9c5!2sAzampur%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1572416394572!5m2!1sen!2sbd"
                    width="100%" height="360" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


            </div>
            <div class="row footer_row">
                <div class="col-md-6">
                    <h3 class="footer_logo">Contact Info</h3>
                    <p class="footer_content">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                        semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                    <h3 class="footer_logo">Address</h3>
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


                    <p class="footer_content">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam
                        semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                        pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                </div>

                <div class="col-md-6">

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
    </div><!-- Row -->
</div>

@section('css')

<style>
    /* footer*/

    .container1 {
        width: 85%;
        margin: auto;


    }

    .m-t-md.footer_form {
        width: 90%;
    }

    .row.footer_row {
        padding-top: 58px;
    }

    .page-footer {
        height: 63px;
        background-color: #F1F4F9;
        margin: auto;
        padding-top: 23px;
        margin-top: 80px;
    }

    .footer_logo {
        color: #4e5e6a;
        font-size: 24px !important;
        line-height: 26.4px;
        font-weight: 300 !important;
        font-family: "Open Sans", sans-serif;
    }


    .footer_content {
        font-size: 14px;
        opacity: o.7;
        color: #4e5e6a;
        font-weight: 400;
        line-height: 22px;
        font-family: "Open Sans", sans-serif;
    }

    address {
        color: #4e5e6a;
        line-height: 18.5667px;
        font-weight: 400;
        font-size: 14px;
    }



    .map {

        margin: auto;
    }


    .icon {}

    .social_icon {
        width: 30px;
        margin-left: 2px;
        margin-top: -25px;
    }


    /* media quary slider and footer */

    @media (min-width: 100px) and (max-width: 992.98px) {



        /* footer*/

        h1 {

            color: black;
            background-color: yellow;
            text-transform: capitalize;
            font-family: Georgia, serif;
            margin-top: 200px;
            margin-bottom: 3.5rem;

        }




        .container.contact_from {

            max-width: 400px;

        }

        .copyright {

            color: black;
            margin-top: -30px;
            font-family: "Times New Roman", Times, serif;

        }

        #footer-section {

            background-color: blue;

        }

        a img {

            width: 38px;
            margin-left: 10px;
            margin-top: -50px;

        }

        .icon {

            line-height: 100px;
        }


        .gmail {

            color: black;
            font-family: Georgia, serif;
            margin-top: 0px;
            font-size: 20px;
            margin-right: -59px;
            text-align: center;
            margin-left: -54px;

        }


        .address {

            color: black;
            font-family: Georgia, serif;
            font-size: 20px;
            margin-left: -37px;
            text-align: center;
            margin-top: 30px;

        }



        .mail {

            color: black;
            text-decoration: none;
            font-size: 20px;
            text-align: center;
            margin-left: -23px;

        }

        .mail a {

            background-color: yellow;
            padding: 12px;
            border-radius: 8px;
            font-size: 20px;
            margin-left: 50px;

        }

        .mail a:hover {

            color: white;
            text-decoration: none;
            background-color: black;

        }

        .phone {

            color: black;
            font-family: Georgia, serif;
            margin-top: 45px;
            font-size: 20px;

        }
    }


    /* media query button */



    @media (min-width: 100px) and (max-width: 730.98px) {

        .btn.btn-success.text-sm-center {
            break-after: page;
        }


        .d-inline-block.login_button {
            margin: auto;
        }

        .search-form-control {
            margin-left: 118px;
        }

    }
</style>

@endsection

<!-- Javascripts -->

<script>
    $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<script>
    $('.carousel').carousel({

    interval :2000
    });
    
</script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzjeZ1lORVesmjaaFu0EbYeTw84t1_nek"></script>