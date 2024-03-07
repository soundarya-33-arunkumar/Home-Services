<?php
session_start();
include("../inc/connect.php");

$email = $_SESSION['email'];

$sql = "SELECT * FROM user WHERE email='$email'";

$result = $conn->query($sql);

if($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        $user_id = $row['user_id'];
    }
} else {
    // Handle the case when the user is not found
    echo "Error: User not found";
}


$rate = $_POST['rate'];
$message = $_POST['message'];


// Insert into the appointment table
$sql1 = "INSERT INTO feedback (user_id, email, rating, review) VALUES ('$user_id', '$email', '$rate', '$message')";
$result1 = $conn->query($sql1);

if ($result1) {

    if ($result1) {
        echo "<script type='text/javascript'> alert('Thank you for rating us !') </script>";
        echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../feedback.php\">";
    } else {
        echo "Error inserting data into feedback table: " . $conn->error;
    }
} else {
    echo "Error inserting data into feedback table: " . $conn->error;
}

$conn->close();
?>
