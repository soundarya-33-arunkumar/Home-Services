<?php
session_start();
include("../inc/connect.php");

$email = $_SESSION['email'];

$sql = "SELECT * FROM user WHERE email='$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $user_id = $row['user_id'];
        $address = $row['address'];
    }
    if($address == "-"){
        echo "<script type='text/javascript'> alert('Please update your address on your profile page')</script>";
        echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../bookslot.php\">";
        exit;
    }
} else {
    echo "Error: User not found";
}

// $address = $_POST['address'];
$bookservice = $_POST['bookservice'];
$date = $_POST['datebook'];
$timeservice = $_POST['timeservice'];
$descbook = $_POST['descbook'];

// Check date and time slot availability
$sql_availability = "SELECT * FROM appointment WHERE date='$date' AND time='$timeservice' AND status='Pending'";
$result_availability = $conn->query($sql_availability);

if ($result_availability->num_rows > 0) {
    // Date and time slot are already booked, you can handle this accordingly
    echo "<script type='text/javascript'> alert('This time slot is already booked. Please choose another time slot.')</script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../bookslot.php\">";
    exit; // Stop execution to prevent further processing
}

if ($bookservice == "1") {
    $serviceid = 1;
} else if ($bookservice == "2") {
    $serviceid = 2;
} else if ($bookservice == "3") {
    $serviceid = 1;
}



// Insert into the appointment table
$sql1 = "INSERT INTO appointment (user_id, address, date, time, descriptions, status) VALUES ('$user_id', '$address', '$date', '$timeservice', '$descbook', 'Pending')";
$result1 = $conn->query($sql1);

if ($result1) {
    // Retrieve the generated appointment_id
    $appointment_id = $conn->insert_id;

    // Insert into the appointment_service table
    $sql3 = "INSERT INTO appointment_service (appointment_id, service_id) VALUES ('$appointment_id', '$serviceid')";
    $result3 = $conn->query($sql3);

    if ($result3) {
        echo "<script type='text/javascript'> alert('New appointment created successfully') </script>";
        echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../bookslot.php\">";
    } else {
        echo "Error inserting data into appointment_service table: " . $conn->error;
    }
} else {
    echo "Error inserting data into appointment table: " . $conn->error;
}

$conn->close();
?>