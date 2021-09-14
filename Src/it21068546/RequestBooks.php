<?php 
//Header
include("./Header.php");
 ?>
<html>
<!-- linking Javascript -->
<script type="text/javascript" src="js/nac.js"></script> 

<!--Icon pack-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--linking css-->
<link rel="stylesheet" type="text/css" href="css/nav.css">
<link rel="stylesheet" type="text/css" href="css/request.css">

<!--Page Head-->
<head>
  <style type="text/css">
  .container:hover {
  border-color: lightskyblue;

  
                
 
}
</style>
   <!--Page title-->
   <title>Request Book</title>
</head>

<!-- Body of page-->
<body>
  <!--main-->
  <div id="main">
    <!--RequestBook   Form -->
    <div class="container"  
        style="background-color: #f2f2f2;  border-top-right-radius: 20px;

          border-top-left-radius: 20px;
          border-bottom-right-radius: 20px;
         border-bottom-left-radius: 20px;
         ">


    <!-- header 1 -->
    <div class="jumbotron">
        <h3>Book Details</h3>
    </div>

    <!--Content-->
    <!--div class="modal-content"-->

      <!-- form Body-->
      <!--div class="modal-body mb-5 p-5"-->

        <!--Form  -->
        <center>
        <form method="post" action=" form.php" style="box-sizing: border-box;" >

          <!--input field   -->
          <div class="form-groups">
          
            <input id="txtName" class="form-controls"  name="txtName" placeholder="🕮 Book Name" type="text" value=""></input><br>
          </div>

          <!--input field   -->
          <div class="form-groups">
            <input id="txtAge" class="form-controls" name="txtAge" placeholder="👤 Auther" type="Text" value=""></input><br>
          </div>

          <!--drop-Down  field  -->
          <div class="form-groups">
            <select id="txt" class="form-controls" placeholder="Category" name="op">
              <option>🖹 Category</option>
              <option>Education</option>
              <option>Novel</option>
              <option>Other</option>
            </select><br>
        </div>

         <!--drop-Down Language field  -->
        <div class="form-groups">
            <select id="txt" class="form-controls"  name="op">
              <option>🗚 Language</option>
              <option>English</option>
              <option>Sinhala</option>
              <option>Tamil</option>
            </select><br>
        </div>

    <!-- header 2 -->
    <div class="jumbotron " style=" padding: 0.5rem ;border-top-right-radius: 0px;
      border-top-left-radius: 0px;">
      <h3>Member Details</h3>
    </div>

    <div class="form-groups">
            <!--input field  user details -->
            <input id="txtName" class="form-controls"  name="txtName" placeholder="👤 Full Name" type="text" value=""></input><br>
          </div>

          <!--input field  -->
          <div class="form-groups">
            <input id="txtAge" class="form-controls" name="txtAge" placeholder="🖂 Email" type="email" value=""></input><br>
          </div>

         <!--Submit  -->
        <div class="form-groups">
            <input id="btnS" class=" btn btn-primary"  class="btn-lg" name="btnS" type="Submit" value="Request" 
            style="height:4rem; width: 100%; font-size: 2rem;border-radius: 1rem;" >
            </input>
        </div>
         <!-- End Form  -->
     </form>
<div class="viwe" style="display:flex;">
      <table id="customers">
  <tr>
    <th>Book</th>
    <th>Author</th>
    <th>Stetus</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>❌</td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td>❌</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>❌ <button class="btn btn-info">Remove</button></td>
  </tr>
  
 
</table>

    </div>
     </div>
     
     </center>
    <!-- End form Body-->
    
    </div>
    <!--End Content-->
  </div>
  <!--end container-->
  </div>    
<!--End main-->
</div>
 

</body>
</html>
<?php 
//include footer
 require("./Footer.php")
  ?>









