<?php 
include("./Header.php");
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>about us </title>
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
    </style>
</head>

<body>
    <h1><b>ABOUT US</b></h1>
    <form>
        <div class="image-upload-wrap">
            <input class="file-upload-input" type="file" onechange="redURL(this);" accepte="image/*" />
            <div class="file-upload-content">
                <img class="file-upload-content">
                <img class="image-title-wrap" width="200" height="150">
            </div>
        </div>


        <h3><b>We Provide you...</b></h3>

        <h4>
            <p>with the ability to view and download <br>many types of books,articales and <br>reports onliner for free</p>
        </h4>

        <br><br><br><br><br><br><br><br><br><br>







        <input type="button" name="btnl" value="Leran More">
    </form>




</body>

</html>