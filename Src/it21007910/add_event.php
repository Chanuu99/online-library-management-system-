<?php
//Header
include("./Event header.php");
?>

<?php
include('config.php');


if(isset($_POST['submit']))
{



$date=$_POST['Date'];
$time=$_POST['Time'];
$name=$_POST['Ename'];
$det=$_POST['Edetail'];
$lang=$_POST['Lang'];



$result="INSERT INTO event_s(Date,Time,Name,description,Language,PID,Admin_ID) VALUES('$date','$time','$name','$det',' $lang','','')";
if ($conn->query($result) === TRUE) {
//echo"<h3>New record created successfully</h3>";

} else {
echo "<h3>Error: " . $result . "<br>" . $conn->error."</h3>";
}
} $conn->close();
?>





<!-- linking Javascript -->

<script type="text/javascript" src=""></script>



<!--linking css-->
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="css/add.css">



<html>



<head>
<!--Page title-->
<title>Add Event</title>
<style>
body{
  
 
bg-blend-mode: overlay;
background-image: radial-gradient(50% 50% at top center,rgba(0,0,0,.70),#262626), url("https://images.unsplash.com/photo-1570102881689-c04ab4cf1f4c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFsbG9vbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");;
   

   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }

 </style>


</head>



<!--page body-->
<body>
<center>
<div id="main">
<!--contact us Form -->
<div class="container"
style="background-color: #f2f2f2; margin: 1rem; border-top-right-radius: 20px;
border-top-left-radius: 20px; border-bottom-right-radius:20px; border-bottom-left-radius:20px; border-align:center;">



<!-- header 1 -->
<div class="jumbotron">

<h1>ADD EVENT</h1>


</div>

<!--Form -->
<form method="post" action="add_event.php" style="box-sizing: border-box;" >



<!--input date-->
<div class="form-set">
<input id="txtName" class="form-controls" name="Date" placeholder="Event Date: Ex 12 May 2016" type="text" value="" required></input><br><br>
</div>



<!--input time-->
<div class="form-set">
<input id="txtAge" class="form-controls" name="Time" placeholder="Event Time: DD/MM/YY" type="text" value="" required></input><br><br>
</div>

<!--input event name-->
<div class="form-set">
<input id="txtName" class="form-controls" name="Ename" placeholder="Event name" type="text"  value="" required></input><br><br>
</div>

<!--input language-->
<div class="form-set">
<select id="txtName" class="form-controls" name="Lang" placeholder="Language">
<option>Language</option>
<option>Sinhala</option>
<option>English</option>
<option>Tamil</option>
</select>

</div>
<br>
<!--input event details-->
<div class="form-set">
<textarea id="txtName" class="form-controls" name="Edetail" placeholder="Description" rows="4" cols="25" value=""></textarea><br><br>
</div>

<!--submit-->
<div class="form-set">
<input id="btn" class=" btn btn-primary" class="btn-lg" name="submit" type="Submit" value="Publish"
style="height:4rem; width: 100%; font-size: 2rem;border-radius: 1rem;">
</input>
</div>



</div>
<!-- End Form -->
</form>



<!-- End form Body-->
</div>
<!--End Content-->
</div>

<!--end container-->
</div>
<!--End main-->



</div>
</center>
</body>

</html>

<?php 
//include footer
 require("./Footer.php");
  ?>