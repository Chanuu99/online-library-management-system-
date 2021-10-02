<?php 
include("./Header.php");
 ?>
 
<html>
	<head>
	 <!-- linking Javascript -->
	 <script type="text/javascript" src=""></script> 

	 <!--linking css-->
	 <link rel="stylesheet" type="text/css" href="">
	 <link rel="stylesheet" type="text/css" href="css/addbook.css">

     <title>Add Books</title>
              				  
	</head>
	
	<body>
		
		<div id="main">
        <div class="container"  
        style="background-color: #f2f2f2;  border-top-right-radius: 20px;

          border-top-left-radius: 20px;
          border-bottom-right-radius: 20px;
         border-bottom-left-radius: 20px;
         ">
		 
		 <div class="jumbotron">
		  <h1>ADD BOOK</h1>
		  <h3>Search Book ID</h3>
		 <input type="text" placeholder="Search Book ID" name="search"> 
		 <button type="submit" value="Go" > go</button>
		 </div>
		 
		<form>
			<!--input field-->
			<div class="input-GROUP">
			<lable>BookID</lable>
			<br>
			<input class="text" type="text" placeholder="Book ID" name="Book ID" required>
			<br>
			<br>
			</div>

			<!--input field-->
			<div class="input-GROUP">
			<lable>Book Name</lable>
			<br>
			<input  class="text" type="text" placeholder="🕮 Book Name" name="Book Name" required>
			<br>
			<br>
			</div>

			<!--input field-->
			<div class="input-GROUP">
			<lable>Author</lable>
			<br>
			<input class="text" type="text" placeholder="👤 Author" name="Author" required>
			<br>
			<br>
			</div>

			<!--input field-->
			<div class="input-GROUP">
			<lable>Publisher</lable>
			<br>
			<input class="text" type="text" placeholder="👤 Publisher" name="Publisher" required>
			<br>
			<br>
			</div>

			<!--input field-->
			<div class="input-GROUP">
			<lable>Edition</lable>
			<br>
			<input class="text" type="text" placeholder="Edition" name="Edition" required>
			<br>
			<br>
			</div>

			<!--Drop down list-->
			<div class="input-GROUP">
			<lable>Category</lable>
			<br>
			<select class="text" placeholder="Category" name="Category" required>
                        <option>🖹 Category</option>
			            <option>Novel</option>
			            <option>Education</option>
                        <option>Other</option>
            </select>
			<br>
			<br>
			</div>
			
			
		</form>
		
		</div>
		</div>
        </body>
</html>

<?php 
//include footer
 require("./Footer.php")
  ?>
