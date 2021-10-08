<?php   //get login details

 session_start(); 
 $username= $_SESSION['logged_user'];    
 
 ?>
<!DOCTYPE html>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- linking Javascript -->
<script type="text/javascript" src="js/nac.js"></script>  
<!--Icon pack-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--linking css-->
<link rel="stylesheet" type="text/css" href="css/nav.css">


</head>
<!--header-->

<!--Side nav bar-->
<div  id="mySidenav" class="sidenav" style=" background: rgba(255,255,255,0.1);
    box-shadow:0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    backdrop-filter: blur(25px);">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
  </a>

  <!--menu header-->
  <a class="gest" color="white" style="display:flex;"><i class="fa fa-user-circle fa-2x" style="color:white; text-decoration: none;  " aria-hidden="true" ></i><?php echo $username ?></a><br> 
 <div style="margin-left:0rem; word-spacing: 1px; font-size:1rem; font-family: 'Varela Round';font-weight: bold;";>
  <!--menu-->
  <a href="../../indexs.php">🎨 Dashboard</a>
  <a href="Src/it21068546/RequestBooks.php">🕮 Request Book</a>
  <a href="https://adithya-coder.github.io/online-library-management-system-/">🛈  About Us</a>
  <a href="#">👤 Contact</a>
</div>
  <!--line-->
  <hr>

  <!--feedback-->
  <div class="rate" >
      <style type="text/css">
            .checked {
                color: orange;
            }
      </style>
      <!--feedback-->
      <h2>Feedback</h2><br>
      <h4>Rate Us</h4>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
  </div><br>

  <!--line-->
  <hr>
  <!--text area-->
  <textarea placeholder="Write Your.. ">
  
  </textarea><br>
  <!--submit feedback-->
  <button class=" btn btn-primary" style="align-items:right;margin-left: 70%; margin-top:0.5rem;">Submit</button>

  <!--line-->
  <hr>

  <!--feedback-->
  <div class="qr" style="">
      <img   src="https://blog.qr1.at/wp-content/uploads/2015/05/qr-code-mulit-appstore.jpg" width="100%" style="" align="center">
  </div>
<!--End Side nav bar-->
</div>


<!--nav bar  logo srach,admin-->
<div class="topnav" style=" background: rgba(255,255,255,0.1);
    box-shadow:0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    backdrop-filter: blur(25px);">
    <!-- logo-->
    <div class="nav-logo"> 
      <img src="bg logo.png"  > 
    </div>
<!-- End nav bar  logo srach,admin-->
</div>

<!--nav bar  menu countrol and navigation-->
<div class="topnav1" style=" background: rgba(255,255,255,0.1);
    box-shadow:0 25px 45px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    backdrop-filter: blur(25px);
    width: auto;">
    <!--side nav bar open  l-->
    <span style="color:grey;padding-left:1rem; font-style: unset;    font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open
    </span>
    <!--navigation-->
    
    </span>

<!--End nav bar  menu countrol and navigation-->
</div>
<div class="navi" style="/*margin-left:85%;*/ padding-top: 2rem; text-align:right;">
<span style="display: inline-flex; text-overflow:inherit;margin-left:    2rem;  margin-bottom:1rem;   font-weight: bold;"> <span style="color:deepskyblue; font-size: 1rem;">User/</span><span style="color:antiquewhite; font-size: 1rem;"> RequestBook</span> 
</span>
</div>






