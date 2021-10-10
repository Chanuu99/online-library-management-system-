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
	  <h1>Admin Login</h1>
		<form method="post" action="includes/check_login.php">
		  <input type="text" placeholder="Email" id="email" name="email" required="required" />
			<input type="password" placeholder="Password" id="password"  name="password" required="required" />
			<button type="submit" class="btn btn-primary btn-block btn-large" id="btn_login">Login</button>
			
			<br><br>
			
		</form>
	</div>
	
</body>

</html>

 <?php
	 // include_once 'Footer.php';
 ?>