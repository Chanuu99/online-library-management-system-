

<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['con_id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE  FROM contact WHERE con_id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:Admin.php");
?>

