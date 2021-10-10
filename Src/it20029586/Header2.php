<!DOCTYPE html>
<body>

<!--Layout -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- linking Javascript -->
<script type="text/javascript" src="js/nac.js"></script>  
<!--Icon pack-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--linking css-->
<link rel="stylesheet" type="text/css" href="css/nav.css">


</head>
<!--header-->
<HEADER>
<!--Side nav bar-->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;
  </a>

  <!--menu header-->
  <a class="gest" color="white"><i class="fa fa-user-circle fa-2x" style="color:white; text-decoration: none; " aria-hidden="true" ></i>Hello, Sign in</a><br> 

  <!--menu-->
  <a href="/">🎨 Dashboard</a>
  <a href="Src/it20029586/addbook.php">🕮 Add Book</a>
  <a href="https://adithya-coder.github.io/online-library-management-system-/">🛈  About Us</a>
  <a href="Src/it20029586/Contact _us.php">&#9742;Contact</a>

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
   <!--text area-->
  <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['feed'])) {
        $feed = $_POST['feed-b'];
       
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO `feedback`(`Description`)VALUES('$feed')");
        
        // Show message when user added
        echo "User added successfully.<script>setTimeout(function(){
            window.location.href = 'RequestBooks.php';
         }, 2000)</script>";

    }
    ?>
    <form action="" method="post">
  <textarea placeholder="Write Your.. " name="feed-b" style="height:100%;">
  
  </textarea><br>
  <!--submit feedback-->
  <button class=" btn btn-primary" style="align-items:right;margin-left: 70%; margin-top:0.5rem;">Submit</button>

  <!--line-->
  <hr>

  <!--feedback-->
  <div class="qr">
      <img src="https://blog.qr1.at/wp-content/uploads/2015/05/qr-code-mulit-appstore.jpg" width="100%" align="center">
  </div>
<!--End Side nav bar-->
</div>


<!--nav bar  logo srach,admin-->
<div class="topnav">
    <!-- logo-->
    <div class="nav-logo"> 
      <img src="https://th.bing.com/th/id/R.36dd618e18bb5ebe5cb174e97d9c4812?rik=Upd0klNFHi%2fCGw&riu=http%3a%2f%2fwww.antioquiatic.edu.co%2fimages%2flogo-biblioteca.png&ehk=7EicayNy8FNz9p9owaZTAi2BRCphdaTviysnInw2bv4%3d&risl=&pid=ImgRaw&r=0"  > 
    </div>
<!-- End nav bar  logo srach,admin-->
</div>

<!--nav bar  menu countrol and navigation-->
<div class="topnav1">
    <!--side nav bar open  l-->
    <span style="color:white;padding-left:1rem; font-style: unset;    font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Open
    </span>
    <!--navigation-->
    <span style="display: inline-flex; text-overflow:inherit;margin-left:    2rem;  margin-bottom:1rem;   font-weight: bold;"> <a href="./"      style="color: #b4b9bb; padding:0px;word-spacing: 0.5rem;">👤User 🞂 🕮 Add Book</a>
    </span>
<!--End nav bar  menu countrol and navigation-->
</div>

</HEADER>

</body>

</html>
