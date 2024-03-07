<?php
//Initialise the session
session_start();
include('../inc/connect.php'); // include the connect.php file

if (!isset($_SESSION['email']))
{
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['mypassword'];
}

$passwd = $_SESSION['password'];

// Check the users login crendentials
$sqluser = "SELECT * FROM user WHERE email = '".$_SESSION['email']."'"; /* Check if the username is exist in database*/
$resultuser = $conn->query($sqluser);

// Check the admin login crendentials
$sqladmin = "SELECT * FROM admin WHERE admin_email = '".$_SESSION['email']."' and  admin_password = '".$passwd."'"; /* Check if the username is exist in database*/
$resultadmin = $conn->query($sqladmin);


if ($resultuser->num_rows == 1) {
    $row = $resultuser->fetch_assoc();

    if (password_verify($passwd, $row['password'])) {
        echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../dashboard.php\">";
        exit();
    }
} elseif ($resultadmin->num_rows == 1) {
    echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../admin/dashboard-admin.php\">";
    exit();
}

echo "<script type='text/javascript'> alert('Invalid email or password. Please try again.') </script>";
session_unset();
echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../login.php\">";


//Close specified connection
$conn->close();

?>


