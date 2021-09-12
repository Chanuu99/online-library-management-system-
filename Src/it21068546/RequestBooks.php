<?php 
include("./Header.php");
 ?>
<!--Layout -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- linking Javascript -->
<script type="text/javascript" src="js/nac.js"></script>  
<!--Icon pack-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--linking css-->
<link rel="stylesheet" type="text/css" href="css/nav.css">
<head>
  


<!--Page title-->
   <title>Request Book</title>
</head>

<!-- Body of page-->
<body>
<div id="main">
<!--RequestBook   Form -->
<div class="container"  style="background-color: #f2f2f2; margin: 10rem; border-top-right-radius: 20px;
  border-top-left-radius: 20px";>

<!-- header 5 -->
<div class="jumbotron">
    <h3>Request Book Details</h3>
</div>

<!--Content-->
<div class="modal-content">

  <!-- form Body-->
  <div class="modal-body mb-5 p-5">

    <!--Form  -->
    <form method="post" action=" form.php" style="box-sizing: border-box;" >

      <!--input field   -->
      <div class="form-groups">
      
        <input id="txtName" class="form-controls"  name="txtName" placeholder="Book Name" type="text" value=""></input><br>
      </div>

      <!--input field   -->
      <div class="form-groups">
        <input id="txtAge" class="form-controls" name="txtAge" placeholder="Auther" type="Text" value=""></input><br>
      </div>

      <!--drop-Down  field  -->
      <div class="form-groups">
        <select id="txt" class="form-controls" placeholder="Category" name="op">
          <option>Category</option>
          <option>Education</option>
          <option>Novel</option>
          <option>Other</option>
        </select><br>
    </div>

     <!--drop-Down Language field  -->
    <div class="form-groups">
        <select id="txt" class="form-controls"  name="op">
          <option>Language</option>
          <option>English</option>
          <option>Sinhala</option>
          <option>Tamil</option>
        </select><br>
    </div>
    <!-- header 5 -->
<div class="jumbotron " style=" padding: 0.5rem ;border-top-right-radius: 0px;
  border-top-left-radius: 0px;">
    <h3>Request Book Details</h3>
</div>
<div class="form-groups">
      
        <input id="txtName" class="form-controls"  name="txtName" placeholder="Book Name" type="text" value=""></input><br>
      </div>

      <!--input field   -->
      <div class="form-groups">
        <input id="txtAge" class="form-controls" name="txtAge" placeholder="Auther" type="Text" value=""></input><br>
      </div>
 <!--Submit  -->
    <div class="form-groups">
       <input id="btnS" class=" btn btn-primary"  class="btn-lg" name="btnS" type="Submit" value="Request" style="border-radius: 0.5rem;" ></input>
    </div>

   </div>
<!-- End Form  -->
</form>
<!--end container-->

</div>

</div>
</dvi>
</body>

 <?php 
//include footer
 require("./Footer.php")
  ?>








