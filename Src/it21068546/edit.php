<?php
// include database connection file
include_once("config.php");
 $noti="";
 $id = $_GET['Request_ID'];

// Check if form is submitted for user update, then redirect to homepage after update
 if(isset($_POST['update'])) {
	 $id = $_POST['Request_ID'];
    $bname = $_POST['bName'];
    $auther=$_POST['bAuther'];
    $cate = $_POST['txtop'];
    $lg = $_POST['txtlg'];

    //member

     $fname = $_POST['fName'];
    $email=$_POST['txtmail'];
   
   
		
	// update user data
	$result = "UPDATE `request_book` SET `Author`='$auther',`Category`='$cate',`Language`='$lg',`Book_name`='$bname',`Email`='$email',`Name`='$fname' WHERE `Request_ID`='$id' ";
	 echo"$id";
	if ($conn->query($result) === TRUE) {
    $noti.="<h3>New record created successfully</h3>";

    
} else {
      $noti.= "<h3>Error: " . $result . "<br>" . $conn->error."</h3>";
} 
 


$conn->close();
	// Redirect to homepage to display updated user in list
	/*header("Location: RequestBooks.php");*/
}
?>
<?php
/*  $auther="";

    $cate= "";
    $lg ="" ;

    $bname ="";

    //member
 $email="";
     $fname ="";
 if(isset($_POST['update'])) {


$id = $_GET['id'];

// Fetech user data based on id
$results ="SELECT  `Author`, `Category`, `Language`, `Book_name`, `Email`, `Name` FROM `request_book` WHERE  Request_ID =$id";
   $r = mysqli_query($conn, $results);

while($row = mysqli_fetch_array($r))
{
	
    $auther.=$row['Author'];
    $cate.= $row['Category'];
    $lg.= $row['Language'];

    $bname.= $row['Book_name'];

    //member
 $email.=$row['Email'];
     $fname.=$row['Name'];
   
   
}
}*/

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>



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
  border-color: white;

  }


.viwe{
  overflow-y:scroll;
overflow-wrap:300px ;

height:300px;

 display:inline-grid;
 width: 100%;

}
               
 

</style>
   <!--Page title-->
   <title>Request Book</title>
</head>

<!-- Body of page-->
<body bgcolor="#f0f0f0">
<?php 
//Header
include("./Header.php");
 ?>


  <!--main-->
  <div id="main">
    <!--RequestBook   Form -->
    <div class="container" >

<div style=" display: grid;
  grid-template-columns: auto auto  ;
        ">
<div style="border: box; border-color:#f2f2f2 ;" >
    <!-- header 1 -->
    <div class="jumbotron">
        <h3>Book Details</h3>
    </div>

    <!--Content-->
    <!--div class="modal-content"-->

      <!-- form Body-->
      <!--div class="modal-body mb-2 p-2"-->

        <!--Form  -->
        <center>
        <form method="post" action="edit.php?Request_ID=<?php echo($id);  ?>"  >

          <!--input field   -->
          <div class="form-groups">
          
            <input id="bName" class="form-controls"  name="bName" placeholder="🕮 Book Name" type="text">
          </div>

          <!--input field   -->
          <div class="form-groups">
            <input id="txtAge" class="form-controls" name="bAuther" placeholder="👤 Auther" type="Text" >
          </div>

          <!--drop-Down  field  -->
          <div class="form-groups">
            <select id="txt" class="form-controls" placeholder="Category" name="txtop">
              <option>🖹 Category</option>
              <option>Education</option>
              <option>Novel</option>
              <option>Other</option>
            </select>
        </div>

         <!--drop-Down Language field  -->
        <div class="form-groups">
            <select id="txt" class="form-controls"  name="txtlg" >
              <option>🗚 Language</option>
              <option>English</option>
              <option>Sinhala</option>
              <option>Tamil</option>
            </select>
        </div>
</div>
<div style="padding-left: 1rem; border: border-box;">
    <!-- header 2 -->
    <div class="jumbotron " style=" ;
      ">
      <h3>Member Details</h3>
    </div>

    <div class="form-groups">
            <!--input field  user details -->
            <input id="fName" class="form-controls"  name="fName" placeholder="👤 Full Name" type="text" >
          </div>

          <!--input field  -->
          <div class="form-groups">
            <input id="txtmail" class="form-controls" name="txtmail" placeholder="🖂 Email" type="email" >
          </div>
<br><br>
         <!--Submit  -->
        <div class="form-groups">
        	<td><input type="text" name="id" value=<?php echo $id;?>></td>
            <input id="btnS" class=" btn btn-primary"  class="btn-lg" name="update" type="Submit" value="update" 
            style="height:4rem; width: 100%; font-size: 2rem;border-radius: 1rem;" >
            </input>
        </div>
         <!-- End Form  -->
     </form>
   
   </div>
   </div>

    <?php echo " $noti "; ?>

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
