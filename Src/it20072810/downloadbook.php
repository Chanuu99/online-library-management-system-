// Do not remove
<?php 
	include("downloadHeader.php");
 ?>
<?php 
  
$ftab="";

 // include database connection file
    include_once("config.php");
     /*-------------------------------------book----------------------------------------------*/
    $fsql = "SELECT ISBN, Book_Name, Cover_pic FROM book ORDER BY ISBN DESC ";
        $fpp = mysqli_query($conn, $fsql);

 
        // output data of each row if(isset($_POST['Request_ID']))
        if ($fpp->num_rows > 0) {
            while($rows = $fpp->fetch_assoc()) {
              $image = $rows['Cover_pic'];    
                $ftab.=" <div style=' display: grid; grid-template-columns:auto;'>";
                $ftab.="<div class='card' style=' margin:3% 3% 3% 3%; padding: 3% 3% 3% 3%; '>";
                $ftab.="<div class='row'> <div class='column'>";
                $ftab.= "<center><img  class='apps'src='../it20029586/image/$image' width='10%' height='5%'></center><br>";
               /* $ftab.= "<h2> ". $rows['Book_Name']."</h2></br>";*/
                $ftab.="<center><a href='details.php?ISBN=$rows[ISBN]'><button  class='btn btn-remove btns nin'> &#128308; Details</center> </div></div>";
                $ftab.="</div></div>";
        
            }
        }

 ?>


 
<html>
<head> <style type="text/css">
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
    </style></head>

<!--WRITE YOUR CODE HERE-->




 </head>
 <body bgcolor="black">
<div style=" display: grid; grid-template-columns: auto auto auto auto auto auto;">


  
    <?php echo "$ftab" ?>
 </div>

</div>


   

</a>
  


</body>
</html>

// Do not remove
<?php
	   include("Src/it21068546/Footer.php");


?>