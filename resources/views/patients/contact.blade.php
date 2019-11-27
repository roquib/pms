@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-5 ml-md-auto">
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
        </div>
        <div class="col-md-4 mt-5">
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
@endsection