<?php
	require '../config.php';
	
	$First_Name = mysqli_escape_string($conn, $_POST['txtFname']);
	$Last_Name = mysqli_escape_string($conn, $_POST['txtLname']);
	$Email = mysqli_escape_string($conn, $_POST['txtEmail']);
	$Password = mysqli_escape_string($conn, $_POST['Password']);
	$ConPassword = mysqli_escape_string($conn, $_POST['ConPassword']);
	
	$sql = "INSERT INTO publisher(Frist_Name, Last_Name, Email, Password) values('$First_Name','$Last_Name','$Email','$Password');";
	
	if($Password == $ConPassword){
		/*
			Change this thing
		*/
		$conn->query($sql);
		
		header("Location: ../PublisherLogin.php");
	}
	
	else{
		
		echo '<script type ="text/JavaScript">';  
		echo 'alert("JavaScript Alert Box by PHP")';  
		echo '</script>'; 
	}
	
?>
