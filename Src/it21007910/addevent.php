<?php 
include("./Header.php");
 ?>

<!DOCTYPE html>
<html>

<head>
    <title>add event</title>
</head>

<body>
<center><h1>add event</h1>
<hr>
    <form>
        <div>
            <label for="Even Id">Event Id:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <br><br><br>
        <div class="col-md-4">
            <label>Event Date:</label>
            <input type="text" placeholder="12 May 2016" id="12 May 2016" />

            <label>Event Time:</label>
            <input type="text" placeholder="12 55 AM" id="12 55 AM" />
        </div>
        <br><br><br>

        <div>
            <label for="Event name">Event Name:</label>
            <input type="text" name="name">
        </div>

        <br><br><br>

        <div>
            <label for="Event Discription">Event Discription:</label>
            <textarea name="discription" id="discription" rows="10" cols="30">

            </textarea>
        </div><br><br>

        <input type="button" name="btnl" value="publish">
    </form>

</body>

</html>