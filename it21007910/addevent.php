<?php 
include("./Header.php");
 ?>


<!DOCTYPE html>
<head>
<link rel="stylesheet"type="text/css"href="css/add event main.css">

<style>
	.header
	{

 /* padding: 0rem 1rem*/;
  margin-bottom: 2rem;
  background-color: #007bff;
  border-radius: 0rem;
  border-top-right-radius: 20px;
  border-top-left-radius: 20px;

    margin-left:1rem;
}
</style>
<body>
	<div class="header">
	<h1>Add Event</h1>
	</div>

<div border>

<div>
  <form action="/action_page.php">
    <label for="Event ID">Event ID:</label>
    <input type="text" id="Event ID" name="Event ID" placeholder=" "><br>
</br>
    <label for="Event Date">Event Date:</label>
    <input type="text" id="Event Date" name="Event Date" placeholder=" 12 May 2016">

      <label for="Event Time:">Event Time:</label>
    <input type="text" id="Time" name="12.55 AM" >
	<br>
	</br>
	 <label for="Event Name:">Event Name:</label>
    <input type="text" id="Name" name="Name" ><br>
	</br>
	<div class description>
	 <label for="Event Description:">Event Name:</label>
    <input type="text Area" id="Description" name="Description" ></div><br>
	
  
    <input type="Submit" value="Publish">
  </form>
</div>

</body>
</html>
