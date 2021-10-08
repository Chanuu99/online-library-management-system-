<?php 
//Header
include("./Header.php");
 ?>

<!-- linking Javascript -->
<script type="text/javascript" src=""></script> 

<!--linking css-->
<link rel="stylesheet" type="text/css" href="css/addevent.css">


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
	
        <h1>Add event</h1>
		
    </div>

    <!--Content-->
    <div class="modal-content">

      <!-- form Body-->
      <div class="modal-body mb-5 p-5">

        <!--Form  -->
        <form method="post" action=" form.php" style="box-sizing: border-box;" >
		
		 <!--input Event Name-->
		 <div class="form-groups">
			
			<input id="txtName" class="form-controls" name="txtName" placeholder="Event Name" type="text" value=""> <br>
         </div>

          <!--input Event Date-->
          <div class="form-groups">
            <input id="txtDate" class="form-controls" name="txtDate" placeholder="Event Date : 12 May 2016" type="text" value=""> <br>
			<!--debug-->
          </div>
		  
		  <!--input Event Time-->
          <div class="form-groups">
            <input id="txtTime" class="form-controls" name="txtTime" placeholder="Event Time : 06:00 PM" type="text" value=""><br>
          </div>

         
		 
		 <!--input Event Description-->
		 <div class="form-groups">
			<textarea id="txtDesc" class="form-controls"  name="txtDesc" placeholder="Event Description" rows="4" cols="25" value=""></textarea>
		 </div>

         <!--send msg-->
         <div class="form-groups">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="btn" type="Submit" value="Publish" 
            style="height:2rem; width: 10%; font-size: 1rem;border-radius: 1rem; float: right; padding-bottom: 30px;"><br>
         </div>

      </div>
     <!-- End Form  -->
     </form>
	 
	 <center>
	 <table class="tb1" >

	   <tr>
	    <td class="rows">
	    +94702526291
	    </td>
	 
	    <td class="rows">
	    +94765678262
	    </td>
	 
	    <td class="rows">
	    bibliocatal@gmail.com
	    </td>
	  </tr>
	 </table>
	 </center>
	 
	 <br>
	 <br>
	 
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








