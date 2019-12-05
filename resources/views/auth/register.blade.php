@extends('layouts.master')

@section('content')

<div class="header_register"> 

    <p class="text-center name "> {{ __('Patient Registration') }}</p>
	
		<form class="container" method="POST" action="{{ route('register') }}">
		
			@csrf
			
			
			<p class="text-center m-t-md "> {{ __('Your must have an account.') }}<br /> {{ __('Create an account') }}</p>
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-right col_3_padd_right">
				  
					<label for="name" class="text-right">{{ __('Name') }}<span class="req_color">{{ __('*') }}</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5  ">
					  
					<input type="text" class="form-control input_width @error('name') is-invalid @enderror"
					name="name" value="{{ old('name') }}"" id="name"  placeholder="Type Your Name"autocomplete="name" autofocus required />
					
					@error('name')
					<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
					</span>
					@enderror
	   
				</div>
				
				<div class="col-sm-2">
												
				</div>
	
			</div>
			
			
			
		
			
			
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-right col_3_padd_right">
				  
					<label for="phone" class="text-right">{{ __('Phone/Email') }} <span class="req_color">{{ __('*') }}</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5">
					  
					<input type="text" class="form-control input_width @error('phone') is-invalid @enderror"
					name="phone" value="{{ old('phone') }}" id="phone"  placeholder="Type Your Phone" required autocomplete="phone" autofocus />
					@error('phone')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				   
				
				</div>
				
				<div class="col-sm-2">
							
				</div>
				  
			</div>
			
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-right col_3_padd_right">
				  
					<label for="phone" class="text-right">{{ __('(Optional) Username') }} </label>
					
				</div>
				  
				<div class="form-group col-sm-5">
					<input id="username" type="text"
					class="form-control input_width @error('username') is-invalid @enderror" name="username"
					value="{{ old('username') }}" placeholder="Type your Username" required autocomplete="username"
					autofocus>

					@error('username')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				   
				
				</div>
				
				<div class="col-sm-2">
							
				</div>
				  
			</div>
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-right col_3_padd_right">
				  
					<label for="phone" class="text-right">{{ __('(Optional) E-mail') }} </label>
					
				</div>
				  
				<div class="form-group col-sm-5">
					<input id="email" type="email" class="form-control input_width  @error('email') is-invalid @enderror"
					name="email" value="{{ old('email') }}" placeholder="user@example.com" required
					autocomplete="email">

					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				   
				
				</div>
				
				<div class="col-sm-2">
							
				</div>
				  
			</div>
			
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-right col_3_padd_right">
				  
					<label for="password" class="text-right">{{ __('Password') }}<span class="req_color">{{ __('*') }}</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5  ">
					  
					<input id="password" type="password"
						class="form-control input_width @error('password') is-invalid @enderror" name="password"
						required autocomplete="new-password" placeholder="Type your Password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
				   
				</div>
				
				<div class="col-sm-2">
							
				</div>
	
			</div>
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-right col_3_padd_right">
				  
					<label for="password-confirm" class="text-right">{{ __('Confirm Password') }}<span class="req_color">{{ __('*') }}</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5  ">
					  
					<input id="password-confirm" type="password"
						class="form-control input_width" name="password_confirmation"
						required autocomplete="new-password" placeholder="Type your Re-Password">
				   
				</div>
				
				<div class="col-sm-2">
							
				</div>
	
			</div>
			
			
			
			<div class="form-row">
			  
				<div class="col-sm-2"> </div>
				
				<div class="col-sm-3 text-right col_3_padd_right"> </div>
					
				<div class="form-group col-sm-5 button_mediaquiey">
				
					<a type="text" href="index.html" class="btn btn_back" style="background-color:#1DB198;"" >Back </a>
					
					<button type="submit" class="btn btn_register " style="background-color:#1DB198;"> {{ __('Register') }}</button>
							
				</div>	
				
				<div class="col-sm-2">
												
				</div>				
						
			</div>	
			
			
			
			<div class="form-row">
			  
				<div class="col-sm-2"> </div>
				
				<div class="col-sm-3 text-right "> </div>
					
				<div class="form-group col-sm-3 button_mediaquiey">
				
					<p class="text-center m-t-xs text-sm">{{ __('Already have an account?') }}</p>
					
                    <a href="{{ route('login') }}" class="btn btn-default btn-block m-t-xs  text-dark " style="background-color:#DAE0E5;">Login</a>
							
				</div>	
				
				<div class="col-sm-4">
												
				</div>				
						
			</div>
			
		</form>



</div>
@endsection

@section('css')

    
<style>

    .header_register{
        background-color:#F1F4F9;
        height: 100%;
        padding-top: 35px;
    }
    
    .name{
        max-width: 31%;
        margin-top: 63px;
        margin: 0 auto;
        margin-top: 62px;
        padding: 3px;
        border-radius: 5px;
        font-size: 23px;
        background-color: #00f3ff;
    }
    
    .header_register .container{
    
        max-width: 960px;
        margin-top: 50px;
    
    }
    
    .req_color{
    
        color: red;
        font-size: 20px;
    
    }
    
     h6 {
        
        font-size: 15px;
        margin-bottom: 62px;
    }
    
    
    .form-row {
        
        margin-right: 45px;
        margin-left: -45px;
        margin-bottom: -45px;
        
    }
    
    .col_3_padd_right {
        padding-right: 60px !important;
    }
    label {
        font-size: 15px;
        font-weight: normal;
        /* padding-left: 115px; */
        padding-top: 18px;
        padding_right:40px;
    }
        
    .form-group {
        
        margin-bottom: 4rem;
            
    }
        
    .input_width {
    
        padding: 1.375rem 0.75rem;
        margin-top: 12px;
        width: 69%;
        font-size: 14px;
        padding: 20px 7px;
        
    }
    
    .req_color{
    
        color: red;
        font-size: 20px;
    
    }
    .last_name_m_top{
    
        margin-top: 6px;
    
    }
    
    
        
    .btn_register {
    
        background-color: #563D7C;
        color: white;
        padding-top: 7px;		
        margin-right: 23px;
        font-size: 13px;
                
        
    }
    
    .btn_back {
    
    background-color: #563D7C;
    color: white;
    padding-top: 7px;		
    margin-right: 23px;
    font-size: 13px;
           
    
    }
    
    
    @media (min-width: 767.98px) and (max-width: 900px) 
    
        { 
    
        
            label {
                
                padding-top: 7px;
                
                } 
                h6 {
                    margin-right: 97px;
            }
            .input_width {
    
                width: 100% !important;
                margin: auto;
                
            }
    
        }
        
    
    @media (min-width:576px) and (max-width: 767.98px)
    
    { 
    
        label {
                
                padding-top: 7px;
                
                } 
    
                .input_width{
    
            width: 100% !important;
            margin: auto;
    
            }
        
        
        h6 {
                 margin-right: 97px;
            }
           
            
            
        
    }
        
        
    @media (min-width: 575px) and (max-width: 675px)
    
        { 
    
        .input_width {
        width: 100% !important;
        margin: auto;
    }
            
    
    
        }
    
    @media (min-width: 200px) and (max-width: 575px) 
    
    
    
        { 
    
    
      
            .col_3_padd_right {
                
                margin: auto;
                text-align: center !important;
                width: 100%;
                margin: auto;
                padding-left: 92px !important;
                width: auto;
            }
    
        
            
            h6 {
                text-align: center;
                margin-left: 84px;
            }
            
            .input_width {
                width: 60% !important;
                margin-left: 116px;
                text-align: center;
            }
            
            
            
        .form-group.col-sm-5.button_mediaquiey {
                padding-left: 90x;
                text-align: center;
            }
            .button_mediaquiey {
                    
                    padding-left: 60px !important;
                }
    }	
    
    
    
    
    </style>
    
    
    
@endsection