<!DOCTYPE html>
<html>
<head>
	<!--Css link CSS/main.css -->
	<link rel="stylesheet" type="text/css" href="online-library-management-system-\CSS">

	<title> My Web Page</title>
</head>
<body>


	<!--calculator Form -->
	<div class="container">

	<!--Calculator   Form -->
	 <div >

	 	<!--Form  -->
		<form method="post" action=" form.php" >

			<!--number input field   -->
			<div class="form-group">
			<label>Enter  Frist Number:</label>

			<input id="txtName" class="form-control" name="txtName" type="number" value="0"></input><br>
			</div>
			<!--number input field   -->
                        <div class="form-group">
			<label>Enter Second Number:</label>
			<input id="txtAge" class="form-control" name="txtAge" type="Number" value="0"></input><br>
                         </div>
            <!--drop-Down  field  -->
 			<div class="form-group">
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
			 </div>

			<!--Submit  -->
			<div class="form-group">
			<input id="btnS" class="btn btn-primary" name="btnS" type="Submit"></input>
			</div>

        </form>
		<!-- End Form  -->

	</div>
	<!--End Form calculator   -->


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
		echo "<div class='panel panel-default'>
  		<div class='panel-body'>Answer is:".$a."</div>
		</div>";
} else if($o=='+'){
	//body
		$a= $n1+$n2;
		echo "<div class='panel panel-default'>
  		<div class='panel-body'>Answer is:".$a."</div>
		</div>";
} else if($o=='*'){
	//body
		$a= $n1*$n2;
		echo "<div class='panel panel-default'>
  		<div class='panel-body'>Answer is:".$a."</div>
		</div>";
} else if($o=='/'){
	//body
		$a= $n1/$n2;
		echo "<div class='panel panel-default'>
  		<div class='panel-body'>Answer is:".$a."</div>
		</div>";
} 

}
 ?> 
<!--End PHP-->
 
