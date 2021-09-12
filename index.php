<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script type="text/javascript" src="Src/it21068546/js/nac.js"></script> 
<link rel="stylesheet" type="text/css" href="Src/it21068546/css/nav.css">
    <title>Dashboard</title>
<body>
  <header> <?php   include("Src/it21068546/Header.php") ?></header>

  <div id="main"><!--calculator Form -->
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
 ?></div>
<footer>

   <style>
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
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
  </head>
  <!--Css link CSS/main.css -->
  <link rel="stylesheet" type="text/css" href="online-library-management-system-\CSS">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  <title> My Web Page</title>
  <body>
  
  </body>
 
 <br> 
   <ul>
  <li><a href="/">Home</a></li>
  <li><a href="Src/it21068546/form.php">Calculator</a></li>
   <li><a href="Src/it21068546/RequestBooks.php">Request Books</a></li>
    <li><a href="Src/it21436680/Member Login.php">hasindu</a></li>
   <li><a href="Src/it20029586/addbook.php">chanudi</a></li>
  <li><a href="https://adithya-coder.github.io/online-library-management-system-/">Contact</a></li>
  <li style="float:right"><a class="active" href="https://adithya-coder.github.io/online-library-management-system-/">About</a></li>
</ul>

<button class="btn btn-info">Click me</button>

   

</a>
   <?php   include("Src/it21068546/Footer.php");
   ?>


</footer>
</body>
</html>
