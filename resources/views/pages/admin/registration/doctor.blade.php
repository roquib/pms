<!DOCTYPE HTML>
<html lang="en-US">

	<head>
	
		<meta charset="UTF-8">
		
		<title> Doctor Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="user_reg.css" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	  
	  <style >
	  
	  
	  
	  body{
		
		background-color:#F1F4F9;
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
			
			
			.container{
			
				max-width: 960px;
				margin-top: 50px;
			
			}
			
			
			 h6 {
				
				font-size: 15px;
				margin-bottom: 62px;
			}
			
			
			.p_create_account{
				
				margin-top: -10px;
			
			}
			
			.req_color{
			
				color: red;
				font-size: 20px;
			
			}
			
			
			
			.form-row {
				
				margin-right: 45px;
				margin-left: -45px;
				margin-bottom: -45px;
				
			}
			
			
			label {
		
				font-size: 15px;
				font-weight: normal;
				padding-left: 115px;
				padding-top: 23px;
				
			}
			
				
			.form-group {
				
				margin-bottom: 4rem;
					
			}
			
				
			.form-control {
			
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
			
			
				
			.btn {
			
				background-color: #563D7C;
				color: white;
				padding-top: 7px;		
				margin-right: 23px;
				font-size: 13px;
						
				
			}
			
			
			.Department{
	
					padding-bottom: 2px;
					padding-top: 0px;
			}
			
			
			
			
			.date_padding{
			
				padding-top: 9px;
				padding-bottom: 33px;
			
			}
			
			#input-file {
				margin-top: 22px;
			}
			
			.qualifiation{
			
			
					height: 68px !important;
			
			
			}
			
		
			@media (min-width: 767.98px) and (max-width: 900px) 
			
				{ 
			
				
					label {
						
						padding-left: 65px;
						
						} 
						h6 {
						    margin-right: 97px;
					}
					.form-control {
	
						width: 100% !important;
						
					}

				}
				
			
			@media (min-width:576px) and (max-width: 767.98px)

			{ 
			
			
				label {
				
					padding-left: 65px;
					
				}  
				
				h6 {
						 margin-right: 97px;
					}
					.form-control {
	
						    width: 100% !important;
						
					}
					
					
				
			}
				
				
			@media (min-width: 575px) and (max-width: 675px)

				{ 
			
				
					label {
					
						padding-left: 10px;
						
					}
					
					
					
			

				}
			
			@media (min-width: 200px) and (max-width: 575px) 
			

			
				{ 
			
			
					label {
					padding-left: 212px;
					}
					
		
				
					
					h6 {
						text-align: center;
						margin-left: 84px;
					}
					
					.form-control {
						width: 60% !important;
						margin-left: 116px;
						text-align: center;
					}
					
					
					
				.form-group.col-sm-5.button_mediaquiey {
						padding-left: 90x;
						text-align: center;
					}
				
		}	
		

	  
	  
	  </style>
		
		
	

	</head>
	
	
	<body> 
	
	
	
		<p class="text-center name "> Doctor-Admin Registration</p>
	
		<form class="container" action="signin.html">
		
		
			
			
			<p class="text-center p_create_account ">Create an account</p>
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label for="input-first-name " >First Name<span class="req_color">*</span></label>
					
				</div>
				  
				<div class="form-group col-sm-5  ">
					  
					<input type="text" class="form-control" id="input-first-name" name="first_name" placeholder=" Type Your First Name" required />
				   
				</div>
				
				<div class="col-sm-2">
												
				</div>
	
			</div>
			
			
			
		
			
			
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label for="input-Last-Name">Last Name </label>
					
				</div>
				  
				<div class="form-group col-sm-5">
					  
					<input type="text" class="form-control" id="input-Last-Name"  name="last_name" placeholder="Type Your Last Name " required />
				   
				
				</div>
				
				<div class="col-sm-2">
							
				</div>
				  
			</div>
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label for="input-Email">Phone/Email <span class="req_color">*</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5">
					  
					<input type="text" class="form-control" id="input-Email"  name="phone_number" placeholder="Type Your Phone or Email " required />
				   
				
				</div>
				
				<div class="col-sm-2">
							
				</div>
				  
			</div>	
			
			
			<div class="form-row">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
					
					<label for="input-department">Department <span class="req_color">*</span>  </label>
						
				</div>
				
				<div class="form-group col-sm-5">
					
					<select class="form-control Department" for="input-department" >
					
						<option selected  >Choose Doctor</option>
						
						<option value="Cardiology" name="">Cardiology</option>
						<option value="Dental & Maxillofacial Surgery " name="">Dental & Maxillofacial Surgery </option>
						<option value="Endocrinology & Diabetology" name="">Endocrinology & Diabetology</option>
						<option value="Neurology" name="">Neurology</option>
						<option value="Nephrology" name="">Nephrology</option>
						<option value="Nephrology" name="">Nephrology</option>
						<option value="psychology" name="">psychology</option>
						<option value="Obstetrics & Gynaecology" name="">Obstetrics & Gynaecology</option>
						<option value="Ophthalmology" name="">Ophthalmology</option>
						<option value="Rheumatology" name="">Rheumatology</option>
						<option value="Urology" name="">Urology</option>
						
						
					</select>
						
				</div>
			  
			</div>
			
			
			
			
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label for="input-Address">Address<span class="req_color">*</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5">
					  
					<input type="text" class="form-control" id="input-Address"  name="address" placeholder="Type Your Address " required />
				   
				
				</div>
				
				<div class="col-sm-2">
							
				</div>
				  
			</div>
			
		
			
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label for="input-date" >Date </label>
					
				</div>
				  
				<div class="form-group col-sm-5  ">
					  
					<input type="date" class="form-control date_padding"  name="date" id="input-Date"  required />
				   
				</div>
				
				<div class="col-sm-2">
							
				</div>
	
			</div>
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label for="input-file" >Photo </label>
					
				</div>
				  
				<div class="form-group col-sm-5  ">
					  
					<input type="file" class="input_file" name="photo" id="input-file"  required />
				   
				</div>
				
				<div class="col-sm-2">
							
				</div>
	
			</div>
			
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label for="input-Qualification" >Qualification<span class="req_color">*</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5  ">
					  
					<textarea class="form-control qualification" name="qualification" id="" placeholder="Type your Qualification" rows="2" ></textarea>
				   
				</div>
				
				<div class="col-sm-2">
							
				</div>
	
			</div>
			
			
			
			
			
			<div class="form-row ">
			
				<div class="col-sm-2"> </div>
			
				<div class="col-sm-3 text-left">
				  
					<label for="input-password" >Password<span class="req_color">*</span> </label>
					
				</div>
				  
				<div class="form-group col-sm-5  ">
					  
					<input type="Password" class="form-control" id="input-password" name="password" placeholder=" Create Your  Password" required />
				   
				</div>
				
				<div class="col-sm-2">
							
				</div>
	
			</div>
			
			
			
			<div class="form-row">
			  
				<div class="col-sm-2"> </div>
				
				<div class="col-sm-3 text-left"> </div>
					
				<div class="form-group col-sm-5 button_mediaquiey">
				
					<a type="text" href="index.html" class="btn" style="background-color:#1DB198;" >Back </a>
					
					<button type="submit" class="btn " style="background-color:#1DB198;">Submit</button>
							
				</div>	
				
				<div class="col-sm-2">
												
				</div>				
						
			</div>	
			
			

			
		</form>
	
	
	</body>
	
</html>