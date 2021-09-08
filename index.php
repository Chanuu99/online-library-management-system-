<html>
  <head>
    <title>Dashboard</title>
    <style>
        ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
.container {
                 border-radius: 5px;
                 background-color: #f2f2f2;
                 padding: 10px 10px 10px 10px;
                 margin:1% 10% 10% 10% ;

                  }
h3 {
  text-shadow: 2px 2px 5px red;
}

input[type=text], select {
 
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}




</style>
  </head>
  <body>
    <?php echo '<p>Welcome to our new app</p>'; ?> 
  </body>
   <ul>
  <li><a href="/">Home</a></li>
  <li><a href="Src/it21068546/form.php">Calculator</a></li>
  <li><a href="#">Folder</a></li>
  <li><a href="/README.md">Contact</a></li>
  <li style="float:right"><a class="active" href="/README.md">About</a></li>
</ul>
   
<a href="Src/it21068546/form.php"><Button >Calculator </Button>
</a></html>
