<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login Form</title>
</head>
	
<body>
	<div class="container">
		<!-- Form -->
		<form>
			
			<div class = "virtual_frame">
			
				<h1>Login</h1>
				<br>
				
				<div class="div_email">
					<div class="cont_1">
						<label class="lbl_credentials">Email</label>
						<div class="cont_1_1">
							<label>Need an account?</label>
							<a  href="/it21436680/regmem_signup_page.php" id="web_signup">Signup</a>
						</div>
					</div>					
					<input type="text" class="input_fields">
				</div>
				<br><br>
				
				<div class="div_password">
					<div class="cont_2">
						<label class="lbl_credentials">Password</label>
						<div style="background-color: lightgreen;"></div>
					</div>
					
					<input type="password" class="input_fields">
				</div>
				<br><br>

				<!--
				<div class="cont_3">
					<input type="checkbox">
					<label type="text">Remember me</label>
				</div>
				-->
				<div style="font-size: 18px">
					<div class="div_checkbox">
						<input type="checkbox">
						<label type="text">Remember me</label>
					</div>
					
					<br><br>	
					
					<div class="buttons" >
						<button id="btn_login">Login</button>
						<button id="btn_guest">Continue as a Guest</button>
					</div>
				</div>
				<br><br>
			</div>
		</form>
		
		<!-- End of form-->
	</div>
</body>

<html>