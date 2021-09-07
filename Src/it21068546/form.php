<!DOCTYPE html>
<html>
<head>
	<!--Css link CSS/main.css -->
	<link rel="stylesheet" type="text/css" href="online-library-management-system-\CSS">

	<title> My Web Page</title>
</head>
<body>

	<!--calculator Form -->
	 <div >
	 	<!--Form  -->
		<form method="post" action=" form.php" >
			<!--number input field   -->
			<label>Enter  Frist Number:</label>
			<input id="txtName"class="txtName" name="txtName" type="number" value="0"></input><br>
			<!--number input field   -->
			<label>Enter Second Number:</label>
			<input id="txtAge"class="txtAge" name="txtAge" type="Number" value="0"></input><br>
            <!--drop-Down  field  -->
			<label>Select operator    :</label>
			<select id="txt"class="txt" name="op">
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
			</select><br>

			<!--Submit  -->

			<input id="btnS"class="btnS" name="btnS" type="Submit"></input>

		</form>
		<!-- End Form  -->
	</div>
	<!--End Form Componet  -->


</body>
</html>


<!--PHP -->
<?php 
//check index
if(isset($_POST["btnS"])){
		//get value form Form
		$n1=$_POST["txtName"];
		$n2=$_POST["txtAge"];
		$o=$_POST["op"];

//check opration
if($o=='-'){
	//body
		$a= $n1-$n2;
		echo "Answer is:".$a;
} else if($o=='+'){
	//body
		$a= $n1+$n2;
		echo "Answer is:".$a;
} else if($o=='*'){
	//body
		$a= $n1*$n2;
		echo "Answer is:".$a;
} else if($o=='/'){
	//body
		$a= $n1/$n2;
		echo "Answer is:".$a;
} 

}
 ?>
 