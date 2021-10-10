<?php
	require_once '../config.php';

	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {

		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
	
		$sql = "SELECT * FROM publisher WHERE Email='$email' AND Password='$password'";
		
		$result = $conn->query($sql);
		
		if(mysqli_num_rows($result) == 1){
			$_SESSION['logged_user'] = $email;
			header("Location:../../../it20029586/addbook.php");
		}
		else{
			echo "<h3>Incorrect Email/Password</h3>";
		}
	}
?>
