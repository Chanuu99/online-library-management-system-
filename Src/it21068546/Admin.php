<?php 
include("./HeaderAdmin.php");

//variable
$emailErr ="";
$tab="";
$utab="";
$btab="";
$ptab="";
$itab="";
$ftab="";
$rids=0;
 // include database connection file
    include_once("config.php");
     /*-------------------------------------Feed----------------------------------------------*/
 $fsql = "SELECT `Feed_ID`, `Description`,Stetus FROM `feedback`ORDER BY Feed_ID DESC ";
        $fpp = mysqli_query($conn, $fsql);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($fpp->num_rows > 0) {
            while($rows = $fpp->fetch_assoc()) {
            	
                $ftab.= "<tr>";
                $ftab.= "<td>". $rows['Feed_ID']."</td>";
                $ftab.= "<td>".$rows['Description']."</td>";
                 $ftab.= "<td>".$rows['Stetus']."</td>";
                $ftab.= "</tr>";
              
            }
        }
    /*-------------------------------------issue----------------------------------------------*/
 $isql = " SELECT `con_id`,  `email`, `message` FROM `contact`ORDER BY con_id DESC ";
        $ipp = mysqli_query($conn, $isql);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($ipp->num_rows > 0) {
            while($rows = $ipp->fetch_assoc()) {
            	
                $itab.= "<tr>";
                $itab.= "<td>". $rows['email']."</td>";
                $itab.= "<td>".$rows['message']."</td>";

                
                
                $itab.= "<td><center><a href='deletei.php?con_id=$rows[con_id]'><button  class='btn btn-remove '>Claim Issue</button></a></td>";
                $itab.= "</tr>";
              
            }
        }
     /*-------------------------------------Publisher----------------------------------------------*/
 $psql = " SELECT `PID`, `Frist_Name`, `Email` FROM `publisher` ORDER BY PID DESC ";
        $rpp = mysqli_query($conn, $psql);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($rpp->num_rows > 0) {
            while($rows = $rpp->fetch_assoc()) {
            	
                $ptab.= "<tr>";
                $ptab.= "<td>". $rows['Frist_Name']."</td>";
                $ptab.= "<td>".$rows['Email']."</td>";

                
                
                $ptab.= "<td><center><a href='deletep.php?PID=$rows[PID]'><button  class='btn btn-remove '>Remove Publisher</button></a></td>";
                $ptab.= "</tr>";
              
            }
        }
    /*-------------------------------------Book----------------------------------------------*/
    $sqlb = "SELECT `PID`,`Book_Name`, `Cover_pic` FROM `book` ORDER BY PID DESC  ";
        $rb = mysqli_query($conn, $sqlb);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($rb->num_rows > 0) {
            while($rows = $rb->fetch_assoc()) {
            	
                $btab.= "<tr>";
                $btab.= "<td>". $rows['PID']."</td>";
                $btab.= "<td>".$rows['Book_Name']."</td>";

                
                
                $btab.= "<td><center><a href='deleteb.php?PID=$rows[PID]'><button  class='btn btn-remove '>Remove Book</button></a></td>";
                $btab.= "</tr>";
              
            }
        }
   /*-------------------------------------user----------------------------------------------*/
  $sqlm = "SELECT `Frist_Name`, `Email`, `RID` FROM `regular_user` ORDER BY RID DESC  ";
        $rm = mysqli_query($conn, $sqlm);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($rm->num_rows > 0) {
            while($rows = $rm->fetch_assoc()) {
                $utab.= "<tr>";
                $utab.= "<td>".$rows['Frist_Name']."</td>";
                $utab.= "<td>".$rows['Email']."</td>";
                
                $utab.= "<td><center><a href='deleteu.php?RID=$rows[RID]'><button  class='btn btn-remove '>Remove User</button></a></td>";
                $utab.= "</tr>";
              
            }
        }

/*-----------------------------------request------------------------------------------------*/
        // Fetch all users data from users table
        $sql = "SELECT Request_ID, Book_name, Author FROM request_book ORDER BY Request_ID DESC  ";
        $r = mysqli_query($conn, $sql);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($r->num_rows > 0) {
            while($rows = $r->fetch_assoc()) {
                $tab.= "<tr>";
                $tab.= "<td>".$rows['Book_name']."</td>";
                $tab.= "<td>".$rows['Author']."</td>";
                
                $tab.= "<td><center><a href='deleter.php?Request_ID=$rows[Request_ID]'><button  class='btn btn-remove '>Claim Request</button></a></td>";
                $tab.= "</tr>";
              
            }
        }

 /*---------------------------------------RID--------------------------------------------*/
//get login details

 /*session_start();
  /*if(isset($_POST['btnS'])) {
       include_once("config.php");
 /*$username= $_SESSION['logged_user'] ;*/



  // Check If form submitted, insert form data into users table.
  





         $rid="SELECT RID FROM `regular_user` where Email='@gmail.com'";
         $res = mysqli_query($conn, $rid);
           
               // output data of each row
         if ($res->num_rows > 0) {
            while($row = $res->fetch_assoc()) {
                
                $rids.=$row['RID'];
               
               
            }
        


 

$conn->close();

  /*if($noti=""){
     header("Location:RequestBooks.php");
  } */
  }
 /*---------------------------------------email check--------------------------------------------*/
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
  <title> Admin </title>
</head>



<!-- linking Javascript -->
<script type="text/javascript" src="js/nac.js"></script> 

<!--Icon pack-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--linking css-->
<link rel="stylesheet" type="text/css" href="css/nav.css">
<link rel="stylesheet" type="text/css" href="css/Admin.css">

<!--Page Head-->

  <style type="text/css">
 body{
  
 
bg-blend-mode: overlay;
background-image: radial-gradient(50% 50% at top center,rgba(0,0,0,.70),#262626), url("https://images.unsplash.com/photo-1570102881689-c04ab4cf1f4c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YmFsbG9vbnN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60");;
   

   -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }



.viwe{

overflow-y:scroll;
overflow-wrap:300px ;
height:300px;
display:inline-grid;
width: 100%;

}
    
table{
width: 100%;
 align-items: center;
padding-right:3%;
}           
 @keyframes text{
    0%{
        color: inherit;
        margin-bottom: 40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: 40px;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: 40px;
    }
 }
 /* card */
 .card{

position: relative;
box-shadow: 20px 20px 50px rgba(0, 0, 0,0.5);
border-radius: 15px;
background: rgba(255, 255, 255, 1.0);
overflow: hidden;
justify-content: center;
align-items: center;
border-top: 1px solid rgba(255, 255, 255, 0.5);
border-left: 1px solid rgba(255, 255, 255, 0.5);
backdrop-filter: blur(5px); 
 }

 /* jambo 2 */
.jumbo{
border-radius:0px; border-top: 1px solid rgba(255, 255, 255, 0.5);
border-left: 1px solid rgba(255, 255, 255, 0.5); position: relative;
box-shadow: 20px 20px 50px rgba(0, 0, 0,0.5); 
}
</style>
</head>

<!-- Body of page-->
<body >

<!--main-->
  <div id="main">
    <!--RequestBook   Form -->
     
<div class="container" style="background-color: rgba(255, 255, 255, 0.5);background: transparent ;  backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px);border-style: none; padding-right: 2px; padding-left: 0px; width:auto;">
<!--gide 2-->
<div style=" display: grid; grid-template-columns: auto auto ;">

<div class="card" style="  margin:3% 3% 3% 3%; padding: 3% 3% 3% 3%; " >
    <!-- header 1 -->
    <div class="jumbotron jumbo" style="">
        <h3 class="her">Publisher </h3>
    </div>
      <div class="viwe" style="border: hidden; margin:auto;"  >

      <table id="customers" width="" >

  <tr>
   <div class="jumbo">
    <th>Name</th>
    <th>Email</th>
    <th>Stetus</th>
  </tr>
</div>
   <?php
        // Create table
      echo "$ptab ";
?>
   
  
  
 
  

</table>

</div>
</div>
<!--member details-->
<div class="card" style="background-color: white; padding: 3% 3% 3% 3%;width: 100%; margin:3% 3% 3% 3%; display:ruby-base-container;">
    <!-- header 2 -->
    <div class="jumbotron jumbo" style="border-radius:0px; background-color: green  ;
      ">
      <h3>Member </h3>
    </div>
<div class="viwe" style="border: hidden; margin:auto;"  >

      <table id="customers" width="" >

  <tr style="color:palegreen;">
   <div class="jumbo">
    <th>Name</th>
    <th>Email</th>
    <th>Stetus</th>
  </tr>
</div>
   <?php
        // Create table
      echo "$utab ";
?>
   
  
  
 
  

</table>

</div>
    
   </div>

<div class="card" style="  margin:3% 3% 3% 3%; padding: 3% 3% 3% 3%; " >
    <!-- header 1 -->
    <div class="jumbotron jumbo" style="background-color: gold;">
        <h3 class="her">Issue </h3>
    </div>
      <div class="viwe" style="border: hidden; margin:auto;"  >

      <table id="customers" width="" >

  <tr>
   <div class="jumbo">
    <th>Email</th>
    <th>Issue</th>
    <th>Stetus</th>
  </tr>
</div>
   <?php
        // Create table
      echo "$itab ";
?>
   
  
  
 
  

</table>

</div>
</div>
<!--member details-->
<div class="card" style="background-color: white; padding: 3% 3% 3% 3%;width: 100%; margin:3% 3% 3% 3%; display:ruby-base-container;">
    <!-- header 2 -->
    <div class="jumbotron jumbo" style="border-radius:0px; background-color: purple  ;
      ">
      <h3>Feedback </h3>
    </div>
<div class="viwe" style="border: hidden; margin:auto;"  >

      <table id="customers" width="" >

  <tr style="color:palegreen;">
   <div class="jumbo">
    <th>Name/ID</th>
    <th>Description</th>
    <th>Level</th>
  </tr>
</div>
   <?php
        // Create table
      echo "$ftab ";
?>
   
  
  
 
  

</table>

</div>
    
   </div>
</div>


   
   
 
<div class="card" style="background-color: white; padding: 3% 3% 3% 3%;width: 100%; display:ruby-base-container;">
     <!-- header 1 -->
 <div class="jumbotron jumbo" style="background-color: orangered;">
        <h3 class="her" style="">Book </h3>
</div>
     
 <div class="viwe" style="border: hidden; margin:auto;"  >

      <table id="customers" width="" >

  <tr>
   <div class="jumbo">
    <th>Publisher</th>
    <th>Book </th>
    <th>Stetus</th>
  </tr>
</div>
   <?php
        // Create table
      echo "$btab ";
?>
   
  
  
 
  

</table>
&nbsp
</div><br>
</div>

<div class="card" style="background-color: white; padding: 3% 3% 3% 3%;width: 100%; margin-top:1rem; display:ruby-base-container;">
    <!-- header 1 -->
    <div class="jumbotron jumbo" style="background-color: hotpink;">
        <h3 class="her">Request  </h3>
    </div>
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

</div> 
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










