<?php 
//Header
function rdir(){
   
   

}
include_once("./HeaderRequest.php");

 ?>


<?php
//variable
$emailErr ="";
$tab="";
$rids=0;

 // include database connection file
    include_once("config.php");
   

       
//get login details

 $username= $_SESSION['logged_user']; 
 


$noti="";

         $rid="SELECT RID FROM `regular_user` where Email='$username'";
         $res = mysqli_query($conn, $rid);
           
               // output data of each row
         if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                
                $rids.=$row['RID'];
               
               
            }
        }

        /* table */

         // Fetch all users data from users table
        $sql = "SELECT Request_ID, Book_name, Author FROM request_book  WHERE RID=$rids ORDER BY Request_ID DESC  ";
        $r = mysqli_query($conn, $sql);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($r->num_rows > 0) {
            while($rows = $r->fetch_assoc()) {
                $tab.= "<tr>";
                $tab.= "<td>".$rows['Book_name']."</td>";
                $tab.= "<td>".$rows['Author']."</td>";
                
                $tab.= "<td><center><a href='delete.php?Request_ID=$rows[Request_ID]'><button  class='btn btn-remove btns'> &#128308; Remove</button></a>  <a href='edit.php?Request_ID=$rows[Request_ID]'><button  class='btn btn-remove btns '>  &#9998; Edit     </button></a></td>";
                $tab.= "</tr>";
              
            }
        }
  // Check If form submitted, insert form data into users table.
  if(isset($_POST['btnS'])) {
    $bname = $_POST['bName'];
    $auther=$_POST['bAuther'];
    $cate = $_POST['txtop'];
    $lg = $_POST['txtlg'];

    //member

    $fname = $_POST['fName'];
    $email=$_POST['txtmail'];
   
   








  if (empty($_POST["txtmail"])) {
    //$noti .= "<h3>Email is required</h3>";
  } else {
    $emails = test_input($_POST["txtmail"]);
    // check if e-mail address is well-formed
    if (!filter_var($emails, FILTER_VALIDATE_EMAIL)) {
      $noti .= "<h3>Invalid email format</h3>";
    }
  

    // Insert user data into table
    $resultt =  "INSERT INTO `request_book`( `RID`, `Author`, `Category`, `Language`, `Book_name`, `Email`, `Name`) VALUES('$rids','$auther','$cate','$lg','$bname','$email','$fname')";
    
    if ($conn->query($resultt) === TRUE) {

    $noti.="<div class='alert success'>
  <span class='closebtn'>&times;</span>  
  <strong>Success!</strong> Request successful Thank you!.
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
            window.location.href = 'RequestBooks.php';
         }, 2000);
</script>
";
   
        
     
} else {
      $noti.= "<h3>Error: " . $resultt . "<br>" . $conn->error."</h3>";
} 
 }


$conn->close();

  /*if($noti=""){
     header("Location:RequestBooks.php");
  } */
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  ?>


<!--HTML-->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Page title-->
  <title> Request Book</title>
</head>


<!-- linking Javascript -->
<script type="text/javascript" src="js/nac.js">

</script> 

<!--Icon pack-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--linking css-->
<link rel="stylesheet" type="text/css" href="css/nav.css">
<link rel="stylesheet" type="text/css" href="css/request.css">
<link rel="stylesheet" type="text/css" href="css/ani.css">

<!--Page Head-->

  <style type="text/css">


</style>
</head>
<!--body of page-->
<body >

<!--main-->
  <div id="main">
    <!--RequestBook   Form -->
     
<div class="container" style="
transition: all .8s ease;



background-color: rgba(255, 255, 255, 0.5);background: transparent ;  backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);border-style: none; padding-right: 2px; padding-left: 0px; width:auto;">
<!--gide 2-->
<div style=" display: grid; grid-template-columns: auto auto  ;">

<div class="card" style="  margin:3% 3% 3% 3%; padding: 3% 3% 3% 3%; " >
    <!-- header 1 -->
    <div class="jumbotron jumbo" style="">
        <h3 class="her">Book Details</h3>
    </div>
      <!--Form  -->
       
        <form method="post" name="form1"  action=" RequestBooks.php"  >

          <!--input field   -->
          <div class="form-groups">
          
            <input id="bName" class="form-controls"  name="bName" placeholder="🕮 Book Name" type="text" value="" required></input><br>
          </div>

          <!--input field   -->
          <div class="form-groups">
        <input id="txtAge" class="form-controls" name="bAuther" placeholder="👤 Auther" type="Text" value="" required></input><br>
          </div>

          <!--drop-Down  field  -->
          <div class="form-groups">
            <select id="txt" class="form-controls" placeholder="Category" name="txtop" required>
              <option>🖹 Category</option>
              <option>Education</option>
              <option>Novel</option>
              <option>Other</option>
            </select><br>
        </div>

         <!--drop-Down Language field  -->
        <div class="form-groups">
            <select id="txt" class="form-controls"  name="txtlg" required>
              <option>🗚 Language</option>
              <option>English</option>
              <option>Sinhala</option>
              <option>Tamil</option>
            </select><br>
        </div>
</div>
<!--member details-->
<div class="card" style="background-color: white; padding: 3% 3% 3% 3%;width: 100%; margin:3% 3% 3% 3%; display:ruby-base-container;">
    <!-- header 2 -->
    <div class="jumbotron jumbo" style="border-radius:0px; background-color: green  ;
      ">
      <h3>Member Details</h3>
    </div>

    <div class="form-groups">
            <!--input field  user details -->
            <input id="fName" class="form-controls"  name="fName" placeholder="👤 Full Name" type="text" value="" required></input><br>
    </div>

          <!--input field  -->
    <div class="form-groups">
            <input id="txtmail" class="form-controls" name="txtmail" placeholder="🖂 Email" type="email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></input><br>
     </div>
          <br><br>
         <!--Submit  -->
    <div class="form-groups">
            <input id="btnS" class=" btn btn-primary btns "  class="btn-lg" name="btnS" type="Submit" onclick="ValidateEmail();"value="Request" 
            style=" margin-top: 2rem; border-radius: 7px;margin-left: 0%;" >
            </input>
    </div>
         <!-- End Form  -->
 </form>
   
   </div>
   </div>


      <?php echo "  $noti \n $emailErr"; ?>
<hr style="background: transparent ;  backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);color:rebeccapurple; width: 100%; margin:3% 3% 3% 3%;  padding-right: rem;" ><br>
       <center>
<div class="card" style="padding:2rem;  margin-left: 3rem; ">
     <!-- header 1 -->
 <div class="jumbotron jumbo" style="background-color: orangered;">
        <h3 class="her" style="">Request Details</h3>
</div>
     <?php  echo"<h3>User ID:$rids</h3>"; ?>
 <div class="viwe" style="border: hidden; margin:auto;"  >

      <table id="customers" width="" >

  <tr>
   <div class="jumbo">
    <th>Book</th>
    <th>Author</th>
    <th>Stetus</th>
  </tr>
</div>
   <?php
        // Create table
      echo "$tab ";
?>
   
  
  
 
  

</table>

</div><br>
</div>
</div>    
<!--End main-->
</div>

</body>
</html>

<?php 
//include footer
 require("./Footer.php")
  ?>










