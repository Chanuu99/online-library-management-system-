<!DOCTYPE html>
<html>
<head>
  <!--Layout -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script type="text/javascript" src="js/nac.js"></script>  
  <!--Css link CSS/main.css -->
<link rel="stylesheet" type="text/css" href="online-library-management-system-\CSS">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<title>Request Book</title>
</head>
<HEADER><div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="gest"><i class="fa fa-user-circle fa-2x" aria-hidden="true">Gest User</i></a>
  <i class="fas fa-tachometer-alt"></i><a href="/">Dashboard</a>
  <a href="#">Request Book</a><i class="fas fa-redo"></i>
  <a href="#">About Us</a><i class="fas fa-info-circle"></i>
  <a href="#">Contact</a><i class="fas fa-info-circle"></i>
</div>

<div class="topnav">
      <img src="https://th.bing.com/th/id/R.36dd618e18bb5ebe5cb174e97d9c4812?rik=Upd0klNFHi%2fCGw&riu=http%3a%2f%2fwww.antioquiatic.edu.co%2fimages%2flogo-biblioteca.png&ehk=7EicayNy8FNz9p9owaZTAi2BRCphdaTviysnInw2bv4%3d&risl=&pid=ImgRaw&r=0" class="logo" width="10%" > 
  </div>


<div class="topnav1">
     <a class="active"  onclick="openNav()" ><img  width="50%"  src="https://www.bing.com/th?id=OIP.IF5ND7jxe56z_8cL13XDVQHaHa&w=96&h=96&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"></a>
    
  </div>





<body>





<div id="main">
<style>

.container {
                 border-radius: 5px;
                 background-color: #f2f2f2;
                 padding: 10px 10px 10px 10px;
                 margin:1% 10% 10% 10% ;

                  }
h3 {
  text-shadow: 2px 2px 5px red;
}

input[type=text], select {
 
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>


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

  ...
</div>
</body>
<footer>
  <div class="topnav1">
    <CENTER>SLIIT <SUP>2021</SUP> </CENTER>
    
  </div>
</footer>
</html>

