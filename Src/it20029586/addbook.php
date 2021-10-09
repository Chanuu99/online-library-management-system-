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
    $tempname = $_FILES["image"]["tmp_name"];    
        $folder = "image/".$filename;
          
    
        
     $iupload_Succssfull = FALSE;
        if (move_uploaded_file($tempname, $folder))  {
             $iupload_Succssfull = TRUE;
			
        }
      
   
  
 
  
  
   $file = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];    
        $folder = "file/".$file;
          
    $sql = "INSERT INTO book(Book_pdf) VALUES ('$file')";
  
         $fupload_Succssfull = FALSE;
          
        if (move_uploaded_file($tempname, $folder))  {
             $fupload_Succssfull = TRUE;
		}
	 
  
   
  if( $iupload_Succssfull and $fupload_Succssfull){
	  $date = date("Y-m-d h:i:sa");

	  $sql="INSERT INTO book( Book_Name, Author, Edition, Category, Cover_pic, Book_pdf, Date ) VALUES ('$name','$author','$edi', '$cat', '$filename', ' $file', '$date')";
  
  if ($conn->query($sql) === TRUE) {
  echo"<h3>New record created successfully</h3>";
  
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
		  <input id="cover" class="form-controls" name="image" placeholder="Upload Cover" type="file" value="" width="5%" required ></input><br><br>
		 </div>

         <!--input pdf-->
		 <div class="form-set">
		  <input id="pdf" class="form-controls" name="file" placeholder="Upload PDF" type="file" value=""></input><br><br>
         </div>

		 
		 <div class="form-set">
            <input id="btn" class=" btn btn-primary"  class="btn-lg" name="submit" type="submit" value="Add Book" 
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
<hr>

</div>
 <div id="main">
 <div class="container"  
        style="background-color: #f2f2f2; margin: 1rem; border-top-right-radius: 20px;
          border-top-left-radius: 20px; border-bottom-right-radius:20px; border-bottom-left-radius:20px; border-align:center;">
		  
		  
		  <?php
		  
		  $sql= "SELECT ISBN, Book_Name, Author, Edition, Category, Cover_pic, Book_pdf FROM book order by Date desc limit 5";
		  $result= $conn->query($sql);
		  
		  if ($result->num_rows > 0) {
		 echo "<table>
		       <tr>
		              <th>Book Name</th>
		              <th>Author</th>
					  <th>Edition</th>
					  <th>Category</th>
					  <th>Cover picture</th>
					  <th>PDF</th>
					  <th>Status</th>
					  
					  
			   </tr>";
			   
			   while($row= $result->fetch_assoc())
				  
			   {
				   $ISBN=$row['ISBN'];
				   
				   echo "<tr><td>".$row["Book_Name"]."</td><td>".$row["Author"]."</td><td>".$row["Edition"]."</td><td>".$row["Category"]."</td><td><img src='/it20029586/image/".$row["Cover_pic"]."'></td><td><div><form action='new.php' method='POST'><input type='text' name='isbn' value='".$ISBN."' style='display: none'/><button type='submit' name='edit'><img src='/it20029586/assets/edit.png'></button></form>
				  <a id='bookelement'></a><form method='POST' action='#bookelement'><input type='text' name='isbn' value='".$ISBN."' style='display: none'/><button type='submit' name='delete'><img src='/it20029586/assets/delete.jpg'></button></form></div></td></tr>";
			   }
			   
			  echo " </table>";
			  
			  
		  }
		  if(isset($_POST['delete']))
			  
			  {
				   $ISBN=$_POST['isbn'];
	  $sql="delete from book where ISBN='$ISBN'";
      
	 
  
  if ($conn->query($sql) === TRUE) {
  echo"<h3>Book deleted successfull</h3>";
  
} else {
echo "<h3>Error: " . $result . "<br>" . $conn->error."</h3>";
}
  }
			  
		?>
		 
		 
 </div>
 
 
</div>
</center>
</body>
  


 <?php 
//include footer
 require("./Footer.php")
  ?>









