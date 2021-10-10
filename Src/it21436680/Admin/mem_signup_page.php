<?php
	// include_once '../Header.php';

	require ('config.php');
	
	$First_Name = mysqli_escape_string($con, $_POST['txtFname']);
	$Last_Name = mysqli_escape_string($con, $_POST['txtLname']);
	$Email = mysqli_escape_string($con, $_POST['txtEmail']);
	$Password = mysqli_escape_string($con, $_POST['Password']);
	$ConPassword = mysqli_escape_string($con, $_POST['ConPassword']);
	
	$sql = "INSERT INTO admin(Frist_Name, Last_Name, Email, Password) values('$First_Name','$Last_Name','$Email','$Password');";
	
	if($Password == $ConPassword){
		/*
			Change this thing
		*/
		$con->query($sql);
		
		header("Location:../it21068546/Admin.php");
	}
	
	else{
		
		echo '<script type ="text/JavaScript">';  
		echo 'alert("JavaScript Alert Box by PHP")';  
		echo '</script>'; 
	}
	


?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/login_form.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
	<div class="login">
		<h1>Admin Signup</h1>
	  
		<form method="post" action="">
		
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