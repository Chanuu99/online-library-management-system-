<?php 
//Header
include("./Header.php");
 ?>

<!-- linking Javascript -->
<script type="text/javascript" src=""></script> 

<!--linking css-->
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="css/contact.css">


<head>
   <!--Page title-->
   <title>Contact Us</title>
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
	
        <h1>CONTACT US</h1>
		<h3> We love to hear from you...</h3>
		
    </div>

    <!--Content-->
    <div class="modal-content">

      <!-- form Body-->
      <div class="modal-body mb-5 p-5">

        <!--Form  -->
        <form method="post" action=" form.php" style="box-sizing: border-box;" >

          <!--input name-->
          <div class="form-set">
            <input id="txtName" class="form-controls"  name="txtName" placeholder="Enter Name" type="text" value=""></input><br><br>
          </div>

          <!--input email-->
          <div class="form-set">
            <input id="txtAge" class="form-controls" name="txtAge" placeholder="Enter E-mail" type="email" value=""></input><br><br>
          </div>
		  
		  <!--input phone-->
          <div class="form-set">
            <input id="txtAge" class="form-controls" name="txtAge" placeholder="Phone" type="Text" value=""></input><br><br>
          </div>

         <!--input message-->
		 <div class="form-set">
            <textarea id="txtName" class="form-controls"  name="txtName" placeholder="Enter Your Message" rows="4" cols="25" value=""></textarea><br><br>
         </div>

         <!--send msg-->
         <div class="form-set">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="btn" type="Submit" value="Send Message" 
            style="height:4rem; width: 100%; font-size: 2rem;border-radius: 1rem;">
            </input>
         </div>

      </div>
     <!-- End Form  -->
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
  


 <?php 
//include footer
 require("./Footer.php")
  ?>








