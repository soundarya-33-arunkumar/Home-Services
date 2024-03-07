<?php
$servername  = "localhost";
$username = "b032120042";
$password = "0696";
$dbname = "student_b032120042";

// Create connection
$conn = new  mysqli($servername, $username, $password, $dbname);
// Check  connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";


?>
