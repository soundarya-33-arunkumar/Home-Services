<!DOCTYPE html>

<head>


<script type="text/javascript" src="js/external.js"></script>

</script>
</head>


<?php
include("../inc/connect.php");

$fn = $_POST['fname'];
$ln = $_POST['lname'];
$email = $_POST['email'];
$psw = $_POST['mypassword'];

// Hash the password before insert to the database
$option = [
    'cost' => 12
];

$hashpwd = password_hash($psw, PASSWORD_BCRYPT, $option);


$sql = "INSERT INTO user (firstname, lastname, address, email, password) VALUES ('$fn', '$ln', '-','$email', '$hashpwd')" or  die ("Error inserting data into table");


if ($conn->query($sql) == TRUE) {
    echo "<script type='text/javascript'> alert('Your account successfully created!') </script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../login.php\">";
} else {
    echo "Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();
?>