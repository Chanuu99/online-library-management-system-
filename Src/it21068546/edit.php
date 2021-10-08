<?php
// include database connection file
include_once("config.php");
 $noti="";
 



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
	/* echo"$id";*/
	if ($conn->query($result) === TRUE) {
    $noti.="<div class='alert success'>
  <span class='closebtn'>&times;</span>  
  <strong>Success!</strong> Request successful updated  Thank you!.
</div> <script type='text/javascript'>
var close = document.getElementsByClassName('closebtn');
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = '0';
    setTimeout(function(){ div.style.display = 'none'; }, 600);
  }
}
    
setTimeout(function(){
            window.location.href = 'https://bibliotca.herokuapp.com/Src/it21068546/RequestBooks.php';
         }, 1);
</script>
";

    
} else {
      $noti.= "<h3>Error: " . $result . "<br>" . $conn->error."</h3>";
} 
 



	// Redirect to homepage to display updated user in list
	/*header("Location: RequestBooks.php");*/
 
}

?>

<?php 
 try{

$id = $_GET['Request_ID'];



// Fetech user data based on id
$results = mysqli_query($conn,"SELECT  `Request_ID`, `Author`, `Category`, `Language`, `Book_name`, `Email`, `Name` FROM `request_book` WHERE  Request_ID =$id");
  

while($row=mysqli_fetch_array($results))
{
  
    $auther=$row['Author'];
    $cate= $row['Category'];
    $lg= $row['Language'];
    $bname= $row['Book_name'];
    $email=$row['Email'];
    $fname=$row['Name'];
   
   
}
}catch(Exception $e ) {
   
  echo "error";
}

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
<link rel="stylesheet" type="text/css" href="css/ani.css">

<!--Page Head-->
<head>
  <style type="text/css">
 

</style>
   <!--Page title-->
   <title>Request Book</title>
</head>

<!-- Body of page-->
<body bgcolor="#f0f0f0">
<?php 
//Header
include("./HeaderRequest.php");
 ?>


  <!--main-->
  <div id="main">
    <!--RequestBook   Form -->
    <div class="container" style="background-color: rgba(255, 255, 255, 0.5);background: transparent ;  backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);border-style: none; padding-right: 2px; padding-left: 0px; width:auto;">

<div style=" display: grid;
  grid-template-columns: auto auto  ;
        ">

 <div class="card" style="  margin:3% 3% 3% 3%; padding: 3% 3% 3% 3%; " >
<div style="border: box; border-color:#f2f2f2 ;" >
    <!-- header 1 -->
    <div class="jumbotron jumbo" style="background-color: green;">
        <h3> Update Book </h3>
    </div>

    <!--Content-->
    <!--div class="modal-content"-->

      <!-- form Body-->
      <!--div class="modal-body mb-2 p-2"-->

        <!--Form  -->
        <center>
        <form method="post" action="edit.php" >

          <!--input field   -->
          <div class="form-groups">
          
            <input id="bName" class="form-controls"  name="bName" placeholder="🕮 Book Name" type="text" value=<?php echo $bname;?>>
          </div>

          <!--input field   -->
          <div class="form-groups">
            <input id="txtAge" class="form-controls" name="bAuther" placeholder="👤 Auther" type="Text"value=<?php echo $auther;?> >
          </div>

          <!--drop-Down  field  -->
          <div class="form-groups">
            <select id="txt" class="form-controls" placeholder="Category" name="txtop" value=<?php echo $cate;?>>
              <option>🖹 Category</option>
              <option>Education</option>
              <option>Novel</option>
              <option>Other</option>
            </select>
        </div>

         <!--drop-Down Language field  -->
        <div class="form-groups">
            <select id="txt" class="form-controls"  name="txtlg" value=<?php echo $lg;?>>
              <option>🗚 Language</option>
              <option>English</option>
              <option>Sinhala</option>
              <option>Tamil</option>
            </select>
        </div>
</div>
</div>
<div class="card" style="  margin:3% 3% 3% 3%; padding: 3% 3% 3% 3%; " >
<div style="padding-left: 1rem; border: border-box;">
    <!-- header 2 -->
    <div class="jumbotron jumbo" style=" ;
      ">
      <h3> Update Member </h3>
    </div>

    <div class="form-groups">
            <!--input field  user details -->
            <input id="fName" class="form-controls"  name="fName" placeholder="👤 Full Name" type="text" value=<?php echo $fname;?>>
          </div>

          <!--input field  -->
          <div class="form-groups">
            <input id="txtmail" class="form-controls" name="txtmail" placeholder="🖂 Email" type="email" value=<?php echo $email;?>>
          </div>
<br><br>
         <!--Submit  -->
        <div class="form-groups">
        	<td><input type="hidden" name="Request_ID" value=<?php echo $_GET['Request_ID'];?>></td>
            <input id="btnS" class=" btn btn-primary btns"   name="update" type="Submit" value="Update" 
            style="height:4rem; width: 100%; font-size: 2rem;border-radius: 1rem;" >
            </input>
        </div>
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
 require("./Footer.php");
  ?>
