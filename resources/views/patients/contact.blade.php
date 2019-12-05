@extends('layouts.master')
@section('content')



<div class="container1">
        <div class="row">
            <div class="col-md-12">
                <div class="map m-auto"  >
                            
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.6078275855266!2d90.39795401457356!3d23.86805588453151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c424e57431ab%3A0x8f68ee5d61cd9c5!2sAzampur%20Bus%20Stop!5e0!3m2!1sen!2sbd!4v1572416394572!5m2!1sen!2sbd" width="100%" height="360"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    
                    
                </div>
                <div class="row footer_row">
                    <div class="col-md-6">
                            <h3 class="footer_logo">Contact Info</h3>
                            <p class="footer_content">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
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
                                Gmail:-Mdmomankhan63@gmail.com<a href="mailto:info@mdmomankhan@gmail.com" class="btn btn-warning mail">Mail</a>
                            </address>
                            
                                
                                <p class="footer_content">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
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
@endsection


@section('css')

<style> 
    .container1 {
            margin-top: 100px;
        }

</style>
    
@endsection