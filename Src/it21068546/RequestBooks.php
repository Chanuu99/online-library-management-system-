<?php
$tab="";

$rids=0;
 // include database connection file
    include_once("config.php");
   

        // Fetch all users data from users table
        $sql = "SELECT Request_ID, Book_name, Author FROM request_book ORDER BY Request_ID DESC  ";
        $r = mysqli_query($conn, $sql);

 
      // output data of each row if(isset($_POST['Request_ID']))
      if ($r->num_rows > 0) {
            while($rows = $r->fetch_assoc()) {
                $tab.= "<tr>";
                $tab.= "<td>".$rows['Book_name']."</td>";
               $tab.= "<td>".$rows['Author']."</td>";
                
                $tab.= "<td><center><a href='delete.php?Request_ID=$rows[Request_ID]'><button class='btn btn-remove'>Remove Detail</button></a> || <a href='edit.php?Request_ID=$rows[Request_ID]'><button class='btn btn-remove'>Edit Detail</button></a></center></td>";
                $tab.= "</tr>";
               
            }
        }


 /*session_start();
  /*if(isset($_POST['btnS'])) {
       include_once("config.php");
 /*$username= $_SESSION['logged_user'] ;*/


$noti="";
  // Check If form submitted, insert form data into users table.
  if(isset($_POST['btnS'])) {
    $bname = $_POST['bName'];
    $auther=$_POST['bAuther'];
    $cate = $_POST['txtop'];
    $lg = $_POST['txtlg'];

    //member

     $fname = $_POST['fName'];
    $email=$_POST['txtmail'];
   
   





         $rid="SELECT RID FROM `regular_user` where Email='@gmail.com'";
         $res = mysqli_query($conn, $rid);
           
               // output data of each row
      if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                
                $rids.=$row['RID'];
               
                ;
            }
        }
    // Insert user data into table
    $resultt =  "INSERT INTO `request_book`( `RID`, `Author`, `Category`, `Language`, `Book_name`, `Email`, `Name`) VALUES('$rids','$auther','$cate','$lg','$bname','$email','$fname')";
    
    if ($conn->query($resultt) === TRUE) {
    $noti.="<h3>New record created successfully</h3>";

    
} else {
      $noti.= "<h3>Error: " . $resultt . "<br>" . $conn->error."</h3>";
} 
 


$conn->close();

  /*if($noti=""){
     header("Location:RequestBooks.php");
  } */
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

<!--Page Head-->
<head>
  <style type="text/css">
 


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
<div style=" border-color:#f2f2f2 ;" >
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
        <form method="post" action=" RequestBooks.php"  >

          <!--input field   -->
          <div class="form-groups">
          
            <input id="bName" class="form-controls"  name="bName" placeholder="🕮 Book Name" type="text" value=""></input><br>
          </div>

          <!--input field   -->
          <div class="form-groups">
            <input id="txtAge" class="form-controls" name="bAuther" placeholder="👤 Auther" type="Text" value=""></input><br>
          </div>

          <!--drop-Down  field  -->
          <div class="form-groups">
            <select id="txt" class="form-controls" placeholder="Category" name="txtop">
              <option>🖹 Category</option>
              <option>Education</option>
              <option>Novel</option>
              <option>Other</option>
            </select><br>
        </div>

         <!--drop-Down Language field  -->
        <div class="form-groups">
            <select id="txt" class="form-controls"  name="txtlg">
              <option>🗚 Language</option>
              <option>English</option>
              <option>Sinhala</option>
              <option>Tamil</option>
            </select><br>
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
            <input id="fName" class="form-controls"  name="fName" placeholder="👤 Full Name" type="text" value=""></input><br>
          </div>

          <!--input field  -->
          <div class="form-groups">
            <input id="txtmail" class="form-controls" name="txtmail" placeholder="🖂 Email" type="email" value=""></input><br>
          </div>
<br><br>
         <!--Submit  -->
        <div class="form-groups">
            <input id="btnS" class=" btn btn-primary"  class="btn-lg" name="btnS" type="Submit" value="Request" 
            style="height:4rem; width: 100%; font-size: 2rem;border-radius: 1rem;" >
            </input>
        </div>
         <!-- End Form  -->
     </form>
   
   </div>
   </div>

      <?php echo " $noti "; ?>
     <div>
     
      <hr style="color:rebeccapurple;"><br>
      <div class="viwe" >

      <table id="customers">
  <tr>
    <th>Book</th>
    <th>Author</th>
    <th>Stetus</th>
  </tr>

   <?php
        // Create database connection using config file
      echo "$tab ";
?>
   
  
  
 
  

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










