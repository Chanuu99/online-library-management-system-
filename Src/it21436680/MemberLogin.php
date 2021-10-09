<?php 
include("./Header.php");
 ?>

<!DOCTYPE html>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/MemberLogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form</title>
	 <style type="text/css">
       body{
  
 
bg-blend-mode: overlay;
background-image: radial-gradient(50% 50% at top center,rgba(0,0,0,.70),#262626), url("https://images.unsplash.com/photo-1570102881689-c04ab4cf1f4c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFsbG9vbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");;
   

   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }
 .viwe{

overflow-y:scroll;
overflow-wrap:300px ;
height:300px;
display:inline-grid;
width: 100%;

}
    </style>
</head>
	
<body>
	<br>
	<div id="main">
	<!-- "container" contains the the form-->
	<div class="container_main">
		<!-- Form -->
		<form>
			
			<div class = "virtual_frame">
			
				<!-- Login header -->
				<h1>Login</h1>
				<br>
				
				<!-- Email -->
				<div class="div_email">
					<div class="cont_1">
						<label class="lbl_credentials">Email</label>
						<div class="cont_1_1" style="font-size: 17px;">
							<label>Need an account?</label>
							<a  href="/it21436680/regmem_signup_page.php" id="web_signup" >Signup</a>
						</div>
					</div>					
					<input type="text" class="input_fields" id="email">
				</div>
				<br><br>
				
				<!-- Password -->
				<div class="div_password">
					<div class="cont_2">
						<label class="lbl_credentials">Password</label>
						<div style="background-color: lightgreen;"></div>
					</div>
					
					<input type="password" class="input_fields" id="passwd">
				</div>
				<br><br>
				
				<!-- Set fontsize of bottom elements -->
				<div style="font-size: 18px">
				
					<!-- Remember me -->
					<div class="div_checkbox">
						<input type="checkbox">
						<label type="text">Remember me</label>
					</div>
					
					<br><br>	
					
					<!--Login buttons -->
					<div class="login_buttons" >
						<button id="btn_login">Login</button>
						<div class="space_login"></div>
						<div><button id="btn_guest">Continue as a Guest</button></div>
					</div>
				</div>
				<br>
				
				<!-- Login with social media -->
				<div class="sm_buttons">
					<div class="fb btn">
						<a><i class="fa fa-facebook fa-fw"></i> Login with Facebook
					</div>
					
					<div class="google btn">
						<i class="fa fa-google fa-fw"></i> Login with Google
						
						<!-- Align FB & Google button contents -->
						&nbsp &nbsp
					</div>
				</div>
				
			</div>
			
		</form>
		
		<!-- End of form-->
	</div>
</div>
</body>

<html>

<!--php-->
