

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['PID'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE  FROM book WHERE PID=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:Admin.php");
?>

