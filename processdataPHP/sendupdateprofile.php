<?php
//Initialise the session
session_start();
include("../inc/connect.php");

$email = $_SESSION['email'];
$emailinput = $_POST['email'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$address = $_POST['address'];


// Validate and sanitize inputs
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$emailinput = filter_var($emailinput, FILTER_VALIDATE_EMAIL);
$firstname = htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8');
$lastname = htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8');

if (!$email || !$emailinput || !$firstname || !$lastname) {
    echo "<script type='text/javascript'> alert('Invalid input data..') </script>";
    echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../profile.php\">";
    exit();
}

$sqls = "UPDATE user SET firstname='".$firstname."', lastname='".$lastname."', address='".$address."', email='".$emailinput."' WHERE email='".$email."'"; /* Check if the username is exist in database*/

if($conn->query($sqls) === TRUE){
    echo "<script type='text/javascript'> alert('The information was successfully updated!.') </script>";
}
else{
    echo "<script type='text/javascript'> alert('Failed to update information.') </script>";
}


//Close specified connection
$conn->close();

echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../profile.php\">";

?>


