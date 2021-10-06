<?php 
//Header
include("./Header2.php");
 ?>

<!-- linking Javascript -->
<script type="text/javascript" src=""></script> 

<!--linking css-->
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="css/addbook.css">


<head>
   <!--Page title-->
   <title>Add Book</title>
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
	
        <h1>ADD BOOK</h1>
		<h3>Search Book ID <input type="text" placeholder="Search Book ID " name="search">
        <button type="submit" value="Go" class="search" > Search</button></h3>
        
		
    </div>

    <!--Content-->
    <div class="modal-content">

      <!-- form Body-->
      <div class="modal-body mb-5 p-5">

        <!--Form  -->
        <form method="post" action=" form.php" style="box-sizing: border-box;" >

          <!--input name-->
          <div class="form-set">
            <input id="txtName" class="form-controls"  name="txtName" placeholder="Book Name" type="text" value="" required></input><br><br>
          </div>

          <!--input author-->
          <div class="form-set">
            <input id="txtAge" class="form-controls" name="txtAge" placeholder="Author" type="Text" value="" required></input><br><br>
          </div>
		  
		  <!--input publisher-->
          <div class="form-set">
            <input id="txtAge" class="form-controls" name="txtAge" placeholder="Publisher" type="Text" value="" required></input><br><br>
          </div>
		  
		  <!--input edition-->
          <div class="form-set">
            <input id="txtAge" class="form-controls" name="txtAge" placeholder="Edition" type="Text" value="" required></input><br><br>
          </div>
		  
		  <!--input category-->
          <div class="form-set">
            <select id="txtAge" class="form-controls" name="txtAge" placeholder="Category" >
			<option>Category</option>
			<option>Novel</option>
			<option>Fiction</option>
			<option>Short Story</option>
		    <option>Scientific</option>
			<option>Mathematics</option>
			<option>Historical</option>
			<option>IT</option>
			</select><br>
          </div>
		  
		  <!--input pdf-->
		 <div class="form-set">
		  <input id="txtAge" class="form-controls" name="txtAge" placeholder="Upload PDF" type="PDF" value="" required></input><br>
         </div>

         <!--input cover-->
		 <div class="form-set">
		  <input id="txtAge" class="form-controls" name="txtAge" placeholder="Upload cover" type="jpeg" value=""></input><br><br>
         </div>


        
		 <table class="tb2" border="0">
		 <tr>
		 <td>
		 <div class="form-groups">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="btn" type="Submit" value="Add Book" 
            style="height:2rem; width: 50%; font-size:12 px;border-radius: 1rem;">
            </input>
         </div>
		 </td>
		 
		 
		 <td>
		 <div class="form-groups">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="btn" type="Reset" value="Reset" 
            style="height:2rem; width: 50%; font-size:12 px;border-radius: 1rem;">
            </input><br><br>
		 </div>
		 </td>
		 
		 </tr>
		 </table>
		 

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
 <div id="main">
 <div class="container"  
        style="background-color: #f2f2f2; margin: 1rem; border-top-right-radius: 20px;
          border-top-left-radius: 20px; border-bottom-right-radius:20px; border-bottom-left-radius:20px; border-align:center;">
 </div>
 
 
</div>
</center>
</body>
  


 <?php 
//include footer
 require("./Footer.php")
  ?>









