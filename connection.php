<?php
$username = "root";
$password = "";
$hostname = "localhost";
$db = "university";

$conn = mysqli_connect($hostname, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 //echo "Connected successfully";

?>