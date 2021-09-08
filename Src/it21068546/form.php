<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Css link CSS/main.css -->
	<link rel="stylesheet" type="text/css" href="online-library-management-system-\CSS">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">	<title> My Web Page</title>
</head>
<body>


	<!--calculator Form -->
	<div class="container">

	<!-- header -->
<div class="jumbotron">
    <h1>Calculator</h1>
</div>
	<!--Calculator   Form -->
	 <div >
	 <!--Content-->
    <div class="modal-content">

      <!--Body-->
     <div class="modal-body mb-5 p-5">

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
			<label>Select operator    :</label>
			<select id="txt" class="form-control"  name="op">
				<option>+</option>
				<option>-</option>
				<option>*</option>
				<option>/</option>
			</select><br>
			 </div>

			<!--Submit  -->
			<div class="form-group">
			<input id="btnS" class="form-control btn btn-primary btn-lg"  name="btnS" type="Submit"></input>
			</div>

        </form>
		<!-- End Form  -->
	</div>
	</div>
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
		echo "</br><div class='alert alert-success'>
  		<div class='panel-body'>Answer is:".$a."</div>
		</div>";
} else if($o=='+'){
	//body
		$a= $n1+$n2;
		echo "</br><div class='alert alert-success'>
  		<div class='panel-body'>Answer is:".$a."</div>
		</div>";
} else if($o=='*'){
	//body
		$a= $n1*$n2;
		echo "</br><div class='alert alert-success'>
  		<div class='panel-body'>Answer is:".$a."</div>
		</div>";
} else if($o=='/'){
	//body
		$a= $n1/$n2;
		echo "</br><div class='alert alert-success'>
  		<div class='panel-body'>Answer is:".$a."</div>
		</div>";
} 

}
 ?> 
<!--End PHP-->
 
