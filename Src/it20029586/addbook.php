<?php 
//Header
include("./Header2.php");
 ?>
 
<?php
  include('config.php');
 

if(isset($_POST['submit']))
{
  
   $name=$_POST['BookName'];
   $author=$_POST['author'];
   $edi=$_POST['edition'];
   $cat=$_POST['category'];
   $image=$_POST
   $pdf=$_POST['file'];

  
  
  $result="INSERT INTO 'book'( `Book_Name`, `Author`, `Edition`, 'Category', 'Book_pdf') VALUES('$name','$author','$edi', '$cat', '$pdf')";
  if ($conn->query($result) === TRUE) {
  /* echo"<h3>New record created successfully</h3>";
  */
} else {
echo "<h3>Error: " . $result . "<br>" . $conn->error."</h3>";
}

} $conn->close();
?>



<!-- linking Javascript -->
<script type="text/javascript" src=""></script> 

<!--linking css-->
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
		<!--h3>Search Book ID <input type="text" placeholder="Search Book ID " name="search"-->
        <!--button type="submit" value="Go" class="search" > Search</button--><!--/h3-->
        
		
    </div>

    <!--Content-->
    <div class="modal-content">

      <!-- form Body-->
      <div class="modal-body mb-5 p-5">

        <!--Form  -->
        <form method="post" action=" Addbook.php" enctype="multipart/form-data" style="box-sizing: border-box;" >

          <!--input name-->
          <div class="form-set">
            <input id="txtName" class="form-controls"  name="BookName" placeholder="Book Name" type="text" value="" required></input><br><br>
          </div>

          <!--input author-->
          <div class="form-set">
            <input id="txtAge" class="form-controls" name="author" placeholder="Author" type="Text" value="" required></input><br><br>
          </div>
		  
		  <!--input edition-->
          <div class="form-set">
            <input id="txtAge" class="form-controls" name="edition" placeholder="Edition" type="Text" value="" required></input><br><br>
          </div>
		  
		  <!--input category-->
          <div class="form-set">
            <select id="txtAge" class="form-controls" name="category" placeholder="Category" >
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
		  
		  <!--input cover-->
		 <div class="form-set">
		  <input id="cover" class="form-controls" name="image[]" placeholder="Upload Cover" type="file" value="" width="5%" required ></input><br><br>
		 </div>

         <!--input pdf-->
		 <div class="form-set">
		  <input id="pdf" class="form-controls" name="file" placeholder="Upload PDF" type="file" value=""></input><br><br>
         </div>

		 
		 <div class="form-set">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="submit" type="Submit" value="Add Book" 
            style="height:2.5rem; width:50%; font-size:20 px;border-radius: 0.25rem;"><br>
            </input>
         </div>
		
		 
		 
		 <div class="form-set">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="btn" type="Reset" value="Reset" 
            style="height:2.5rem; width:50%; font-size:20 px;border-radius: 0.25rem;">
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









