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
  
   
   $filename = $_FILES["image"]["name"];
   $iupload_Succssfull = FALSE;
   if($filename){
	   $tempname = $_FILES["image"]["tmp_name"];    
        $folder = "image/".$filename;
          
    
        
     
        if (move_uploaded_file($tempname, $folder))  {
             $iupload_Succssfull = TRUE;
			
        } 
   } else{
	    $iupload_Succssfull = TRUE;
   }
    
      
   
  
 
  
   $fupload_Succssfull = FALSE;
   $file = $_FILES["file"]["name"];
   if( $file){
	   $tempname = $_FILES["file"]["tmp_name"];    
        $folder = "file/".$file;
          
   
  
        
          
        if (move_uploaded_file($tempname, $folder))  {
             $fupload_Succssfull = TRUE;
		}
   } else{
	    $fupload_Succssfull = TRUE;
   }
    
	 
  
   
  if( $iupload_Succssfull and $fupload_Succssfull){
	
	  $ISBN=$_POST['isbn'];
	  $sql="";
      if($filename and $file){
		  
		   $sql="UPDATE book set Book_Name='$name',Author='$author',Edition='$edi',Category='$cat',Cover_pic='$filename',Book_pdf='$file' where ISBN='$ISBN'";
	  }
  else if ($filename){
	  $sql="UPDATE book set Book_Name='$name',Author='$author',Edition='$edi',Category='$cat',Cover_pic='$filename' where ISBN='$ISBN'";
	  
  }
  
  else if ($file){
	  $sql="UPDATE book set Book_Name='$name',Author='$author',Edition='$edi',Category='$cat',Book_pdf='$file' where ISBN='$ISBN'";
	  
  }
  else{
	  $sql="UPDATE book set Book_Name='$name',Author='$author',Edition='$edi',Category='$cat' where ISBN='$ISBN'";
	  
  }
	 
  
  if ($conn->query($sql) === TRUE) {
  echo"<h3>Book updated successfull</h3>";
  
} else {
echo "<h3>Error: " . $result . "<br>" . $conn->error."</h3>";
}
  }
 $conn->close();
  
  }
  
 
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
		
		<form method="post" action=" new.php" enctype="multipart/form-data" style="box-sizing: border-box;" >
		<?php
		if(isset($_POST['edit'])){
			$ISBN=$_POST['isbn'];
	        
			$sql= "SELECT * from book where ISBN='$ISBN'";
		    $result= $conn->query($sql);
		  
		  if ($result->num_rows > 0) {

			   
			   while($row= $result->fetch_assoc())
				  
			   {
				$BookName=$row['Book_Name'];
				$author=$row['Author'];
				$edition=$row['Edition'];
				$Category=$row['Category'];
			   }
			   
		} } else{
			$BookName="";
				$author="";
				$edition="";
				$Category="";
			   
		  }
		
		
          echo "<input type='text' name='isbn' value='".$ISBN."' style='display: none'/>";
          //<!--input name-->
           echo'<div class="form-set">';
           echo '<input id="txtName" class="form-controls"  name="BookName" placeholder="Book Name" type="text" value="'.$BookName.'" required></input><br><br>';
           echo '</div>';

          //<!--input author-->
            echo '<div class="form-set">';
            echo '<input id="txtAge" class="form-controls" name="author" placeholder="Author" type="Text" value="'.$author.'" required></input><br><br>';
            echo '</div>';
		  
		 // <!--input edition-->
           echo '<div class="form-set">';
           echo '<input id="txtAge" class="form-controls" name="edition" placeholder="Edition" type="Text" value="'.$edition.'" required></input><br><br>';
           echo '</div>';
		  
		  //<!--input category-->
             echo '<div class="form-set">';
             echo '<select id="txtAge" class="form-controls" name="category" placeholder="Category" >';
			 echo '<option '.($Category==="Category"?"selected":"").'>Category</option>';
			 echo '<option '.($Category==="Novel"?"selected":"").'>Novel</option>';
			 echo '<option '.($Category==="Fiction"?"selected":"").'>Fiction</option>';
			 echo '<option '.($Category==="Short Story"?"selected":"").'>Short Story</option>';
		     echo '<option '.($Category==="Scientific"?"selected":"").'>Scientific</option>';
			 echo '<option '.($Category==="Mathematics"?"selected":"").'>Mathematics</option>'; 
			 echo '<option '.($Category==="Historical"?"selected":"").'>Historical</option>';
			 echo '<option '.($Category==="IT"?"selected":"").'>IT</option>';
			 echo '</select><br>';
             echo '</div>';
		  
		 
		?>
		
		 <!--input cover-->
		 <div class="form-set">
		  <input id="cover" class="form-controls" name="image" placeholder="Upload Cover" type="file" value="" width="5%" required ></input><br><br>
		 </div>

         <!--input pdf-->
		 <div class="form-set">
		  <input id="pdf" class="form-controls" name="file" placeholder="Upload PDF" type="file" value=""></input><br><br>
         </div>

		 
		 <div class="form-set">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="submit" type="submit" value="Update" 
            style="height:2.5rem; width:50%; font-size:20 px;border-radius: 0.25rem;"><br>
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
<hr>

</div>
 
</center>
</body>
  
</html>

 <?php 
//include footer
 require("./Footer.php")
  ?>









