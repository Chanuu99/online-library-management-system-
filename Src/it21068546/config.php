<?php
/*$servername = "remotemysql.com";
$username = "CNqQ9qf2VC";
$password = "VEyeXiBvbd";
$dbname = "CNqQ9qf2VC";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
*/
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_libaray";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>