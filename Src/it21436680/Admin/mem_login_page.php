<!DOCTYPE html>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form</title>
</head>
	
<body>
	<br>
	<div id="main">
	<!-- "container" contains the the form-->
	<div class="container_main">
		<!-- Form -->
		<form method="post" action="includes/check_login.php">
			
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
					<input type="text" name="email" class="input_fields" id="email">
				</div>
				<br><br>
				
				<!-- Password -->
				<div class="div_password">
					<div class="cont_2">
						<label class="lbl_credentials">Password</label>
						<div style="background-color: lightgreen;"></div>
					</div>
					
					<input type="password" name="password" class="input_fields" id="passwd">
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
						<button id="btn_login" type="submit" name="login">Login</button>
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
