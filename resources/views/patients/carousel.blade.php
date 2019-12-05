
<!-- Carousel slider -->

<div class="caro w-100 ">
						
    <div class="bd-example">

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            
                <ol class="carousel-indicators">
                
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                      
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                  
                </ol>
                
                <div class="carousel-inner">
                
                    <div class="carousel-item active">
                  
                        <img src="{{asset('patient/img/blood-pressure-monitor-1749577_1920.jpg')}}"
                        class="d-block w-100" alt="First Slide" />
                    
                        <div class="carousel-caption  d-md-block">
                    
                            <h5></h5>
                      
                            <p></p>
                      
                        </div>
                    
                    </div>
                  
                    <div class="carousel-item">	
                      
                        <img src="{{asset('patient/img/assistant-3579026_1920.jpg')}}" class="d-block w-100"
                        alt="Second Slide" />
                        
                        <div class="carousel-caption  d-md-block">
                        
                            <h5></h5>
                          
                            <p></p>
                          
                        </div>
                        
                    </div>
                      
                    <div class="carousel-item">
                    
                         <img src="{{asset('patient/img/nurse-2141808_1920.jpg')}}" class="d-block w-100"
                        alt="Third Slide" />
                        
                        <div class="carousel-caption  d-md-block">
                        
                            <h5></h5>
                            
                            <p></p>
                        
                        </div>
                    
                    </div>
                    
                    <div class="carousel-item">
                    
                         <img src="{{asset('patient/img/dentist-1639683_1920.jpg')}}" class="d-block w-100"
                        alt="Four Slide" />
                        
                        <div class="carousel-caption  d-md-block">
                        
                            <h5></h5>
                            
                            <p></p>
                        
                        </div>
                    
                    </div>
                    
                </div>
                
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  
                  <span class="sr-only">Previous</span>
                  
                </a>
                
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  
                  <span class="sr-only">Next</span>
                  
                </a>
                
            </div>

        </div>
    
    </div>
    
</div>

@section('css')

<style>

        /* carousel*/
     
     
     .caro{
       
       width: 100%;
       
     
     }
     
     
     .carousel-inner img {
        
        height: 600px;
        
     }
     
     .logo_img {
       width: 25px;
       padding-right: 5px;
       margin: auto;
       margin-top: -4px;
     }
     
     a .login_img {
       width: 20px;
       margin-left: 30px !important;
       text-align: center;
       margin:auto;
     }
     
     a .signin_img {
       width: 20px;
       text-align: center;
       margin:auto;
     }
     
     
     @media (min-width: 100px) and (max-width: 992.98px) { 
     
     
     
     
     /* slider */
     
         .caro{
         
         width: 100%;
         margin-top:0px;
     
         }
     
         .carousel-inner img {
         
         height: 375px;
         
         }
     
     }
     
     </style>
    
@endsection
