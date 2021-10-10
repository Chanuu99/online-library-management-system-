<?php
	require '../config.php';
	
	$First_Name = mysqli_escape_string($con, $_POST['txtFname']);
	$Last_Name = mysqli_escape_string($con, $_POST['txtLname']);
	$Email = mysqli_escape_string($con, $_POST['txtEmail']);
	$Password = mysqli_escape_string($con, $_POST['Password']);
	$ConPassword = mysqli_escape_string($con, $_POST['ConPassword']);
	
	$sql = "INSERT INTO regular_user(Frist_Name, Last_Name, Email, Password) values('$First_Name','$Last_Name','$Email','$Password');";
	
	if($Password == $ConPassword){
		/*
			Change this thing
		*/
		$con->query($sql);
		
		header("Location: ../PublisherLogin.php");
	}
	
	else{
		
		echo '<script type ="text/JavaScript">';  
		echo 'alert("JavaScript Alert Box by PHP")';  
		echo '</script>'; 
	}
	
?>
