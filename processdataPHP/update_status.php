<?php

session_start();
include('../inc/connect.php');


$app_id = $_POST['appointment_id'];
$status = $_POST['status'];


$sql = "UPDATE appointment SET status = '".$status."' where appointment_id = '".$app_id."'";

$result = $conn->query($sql);

if($conn->query($sql) == TRUE){
    echo "<script type='text/javascript'> alert('Data Had been Updated!') </script>";
    echo "</p>";
    echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../admin/dashboard-admin.php\">"; // refresh the page
}else{
    echo "<p style='text-align: center'> Error:". $sql . "<br>". $conn->error;
    echo "</p>";
}

// Close the connection
$conn->close();


?>