<?php
	// include_once '../Header.php';
?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/login_form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<div class="login">
		<h1>Admin Signup</h1>
	  
		<form method="post" action="admin_signup.php">
		
			<input type="text" placeholder="Enter First Name" id="txtFname" name="txtFname" name="email" required="required" />
			
			<input type="text" placeholder="Enter Last Name" id="txtLname" name="txtLname" required="required" />
			
			<input type="text" placeholder="Enter E-mail" id="txtEmail" name="txtEmail" required="required" />
			
			<input type="password" placeholder="Enter Password" id="Password"  name="Password" required="required" />
			
			
			<input type="password" placeholder="Confirm Password" id="ConPassword"  name="ConPassword" required="required" />
			
			<br>
			<br>
			
			<input type="checkbox" id="checkbox" name="checkbox" style="width: auto !important;">We agree to your <a href="terms_and_conditions.php" style="color: #007bff;" id = "tac">Terms & Conditions</a>
			
			<br><br>

			<button type="submit" class="btn btn-primary btn-block btn-large" id="btn_login">Signup</button>
			
			<br><br>
			
		</form>
		
	</div>
	
</body>

</html>

 <?php
	// include_once 'Footer.php';
// ?>