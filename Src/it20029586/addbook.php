<?php 
include("./Header.php");
 ?>
 
<html>
	<head>
		<title>Add Books</title>
                <style>
                 form{
                       width:500px;
                       margin:auto;
                       padding:20px;
                       background:gray;
                       font-size:16px;
                       border-radius:10px;
                       font-family:verdana;
                       color:white;
                      }

                 .text{

                       width: 500px;
                       height: 5%;
                       border-radius:10px;
                       text-align:left;
                       font-family:verdana;
                       font-size:16px;
                       color:gray;
                       outline:none;
                      }
           
                 .header{
                        background:blue; 
                        }
                </style>


	</head>
	<body>
		<!--1 nav bar-->
		<!--2 nav bar-->
		<div class="header">
		<h2>Add Book</h2>
                <h4>Search Book ID</h4>
		<input type="text" placeholder="Search Book ID" name="search">
		<button type="submit" value="Go" ></button>
		<hr>
                </div>

		<form>
			<!--input field-->
			Book ID
			<br>
			<input class="text" type="text" placeholder="Book ID" name="Book ID" required>
			<br>
			<br>

			<!--input field-->
			Book Name
			<br>
			<input  class="text" type="text" placeholder="Book Name" name="Book Name" required>
			<br>
			<br>

			<!--input field-->
			Author
			<br>
			<input class="text" type="text" placeholder="Author" name="Author" required>
			<br>
			<br>

			<!--input field-->
			Publisher
			<br>
			<input class="text" type="text" placeholder="Publisher" name="Publisher" required>
			<br>
			<br>

			<!--input field-->
			Edition
			<br>
			<input class="text" type="text" placeholder="Edition" name="Edition" required>
			<br>
			<br>

			<!--Drop down list-->
			Category
			<br>
			<select class="text" placeholder="Category" name="Category" required>
                        <option>Category</option>
			<option>Novel</option>
			<option>Education</option>
                        <option>Other</option>
                        </select>
			<br>
			<br>
			
			
		</form>
		
		</div>
        </body>
</html>
