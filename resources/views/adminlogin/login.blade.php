
@section('content')

<div class="container">
	
		<form class="patients-form" >
		
			<div class="form-row patients-form-row ">
			
			
						  
				<div class="col-sm-12">
					  
					<h6><p class="text-center"> Patients Form</p></h6>
					
				</div>
				
				
					
			</div>	<div class="form-row patients-form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left"> </div>
				  
				<div class="col-sm-5">
					  
					<h6><span class="req_color">*</span>Field (s) are required.</h6>
					
				</div>
				
				
				<div class="col-sm-2">
												
				</div>
	
			</div>
		
		
			<div class="form-row patients-form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label class="patients-form-label"  for="input-first-name ">First Name <span class="req_color">*</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5 patients-form-group  ">
					  
					<input type="text" class=" form-control patients-form-control" id="input-first-name" placeholder=" Type Your First Name" required ="1"/>
				   
				</div>
	
			</div>
			
			
			
			<div class="form-row patients-form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label class="patients-form-label"  for="input-last-name">Last Name</label>
					
				</div>
				  
				<div class="form-group col-sm-5 patients-form-group ">
					  
					<input type="text" class="form-control patients-form-control" id="input-last-name" placeholder=" Type Your Last Name" />
				   
				</div>		
				  
			</div>
			
			
			
			<div class="form-row patients-form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label class="patients-form-label"  for="input-Email">Phone/Email <span class="req_color">*</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5 patients-form-group">
					  
					<input type="text" class="patients-form-control form-control" id="input-Email" placeholder="Type Your Phone or Email" required ="3"/>
				   
				</div>
				  
			</div>
	
	
	
			<div class="form-row patients-form-row">

				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
					
					<label class="patients-form-label"  for="input-Address">Address <span class="req_color">*</span> </label>
						
				</div>
					
				<div class=" form-group col-sm-5 patients-form-group">
					
					<input type="text" class="patients-form-control form-control" id="input-Address" placeholder=" Type Your Full Address" required ="4"/>
					
				</div>
					
				<div class="col-sm-3">
							
				</div>
					
			</div>
			
			
			
			<div class="form-row patients-form-row">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
					
					<label class="patients-form-label"  for="input-State">Doctor <span class="req_color">*</span>  </label>
						
				</div>
				
				<div class="form-group col-sm-5 patients-form-group">
					
					<select id="input-State" class="patients-form-control form-control" >
					
						<option selected  >Choose...</option>
						
						<option>...</option>
						
					</select>
						
				</div>
			  
			</div>


			<div class="form-row patients-form-row">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
					
					<label class="patients-form-label"  for="input-State">Room <span class="req_color">*</span>  </label>
						
				</div>
				
				<div class="form-group col-sm-5 patients-form-group">
					
					<select id="input-State" class="patients-form-control form-control" >
					
						<option selected  >Choose...</option>
						
						<option>...</option>
						
					</select>
						
				</div>
			  
			</div>
					
				
			<div class="form-row patients-form-row">
		
				<div class="col-sm-2">
			
				</div>
				
				<div class="col-sm-3 text-left">
						
					<label class="patients-form-label" for="input-Zip">Date <span class="req_color">*</span> </label>
							
				</div>
					
				<div class=" form-group col-sm-5 patients-form-group">
						
					<input type="date" class="patients-form-control form-control date_padd_top" id="input-Zip" required ="6"/>
				 
				</div>
				
			</div>
			
			
			<div class="form-row patients-form-row">
			  
				<div class="col-sm-2"> </div>
				
				<div class="col-sm-3 text-left"> </div>
					
				<div class="form-group col-sm-5 button-col patients-form-group">
				
					<a type="text" class="btn back-button" href="index.html" style="color:white;">Back </a>
					
					<button type="submit" class="btn submit-button" style=" color:white;">Submit</button>
							
				</div>				
						
			</div>
			
		</form>
		
	</div>
    
@endsection


@section('css')

<style>
	   
			
		
			
			
			
			
          p{
          
              max-width: 85%;
              margin-top: 40px;
              margin: 0 auto;
              margin-top: 62px;
              padding: 3px;
              border-radius: 5px;
              font-size: 30px;
              margin-bottom: 26px;
              background-color:powderblue;

         }
         
         .container{
         
              max-width: 960px;
              margin-top: 35px;
                        
         
         }
         
         h6 {
              
              font-size: 16px;
              padding-bottom: 40px;
              
         }
         .patients-form {
              
              background: rgba(33, 30, 34, 0.3);
              background-image: url("img/doctor_patient.jpg");
              background-attachment:fixed;
              height: 809px;
              background-position: bottom;
              background-size: cover;
         }
         
         
         .patients-form-row {
              
              
              margin-bottom: -28px;
              
         }
         
         
         .req_color{
         
              color: red;
              font-size: 20px;
         
         }
         
         
         .patients-form-label  {
    
              font-size: 17px;
              font-weight: normal;
              padding-left: 95px;
              padding-top: 6px;
              font-size: 16px;
              color:black;
              
         }
              
         .patients-form-group {
              
              margin-bottom: 4rem;
                   
         }
              
         
         
         .patients-form-control {
         
              width: 80%;
              height: 42px;
              font-size: 14px;
                        
         }
         
         
         .patients-form-control.btn.btn-block {
         
              background-color: #563D7C;
              color: white;
              padding-top: 10px;
              padding-bottom: 35px;
              width: 85%;
              
         }
         
         
         .back-button {
         
              
              background-color: #22BAA0;
              color: white;
              padding-top: 7px;		
              margin-right: 23px;
              font-size: 14px;
                        
              
         }
         
         .submit-button {
         
              
              background-color: #22BAA0;
              color: white;
              padding-top: 7px;		
              margin-right: 23px;
              font-size: 14px;
                        
              
         }
         
         
         @media (min-width: 767.98px) and (max-width: 900px) 
         
              { 
         
              
                   .patients-form-label {
                        
                        padding-left: 65px;
                        
                        } 

              }
              
              
         
         @media (min-width:576px) and (max-width: 767.98px)

         { 
         
         
              .patients-form-label {
              
                   padding-left: 25px;
                   font-size: 16px;
                   
              }  
              
         }
              
              
         @media (min-width: 575px) and (max-width: 675px)

              { 
         
              
                   .patients-form-label{
                   
                        padding-left: 10px;
                        font-size: 16px;
                        
                   }

              }
         
         @media (min-width: 200px) and (max-width: 575px) 
         
              { 
              
              .patients-form {
              
              background: rgba(33, 30, 34, 0.3);
              background-image: url("img/doctor_patient.jpg");
              background-attachment:fixed;
              height: 1105px;
              background-position: bottom;
              background-size: cover;
         }
         
         
                   .patients-form-label  {
                   
                        padding-left: 57px;
                        font-size: 17px;
                        font-weight: normal;
                        padding-top: 6px;
                        font-size: 16px;
              
                   } 
              
                   .patients-form-control{
                   
                        width:70%;
                        margin-left:55px;
                        font-size: 14px;
                        
                   }
                   
                   h6 {
              
                        text-align:center;
              
                   }
                   
                   .button-col {
                        text-align: center;
                   }
                   
                   .back-button{
                   
                   }
                   
                   .submit-button{
                   
                   }
    }
         
         
         
                        

 
    </style>
    
@endsection