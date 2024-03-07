<?php
//Initialise the session
session_start();

include("../inc/connect.php");

$email = $_SESSION['email'];
$oldpasswd = $_POST['oldpass'];
$newpasswd = $_POST['newpass'];

// Hash the password before insert to the database
$option = [
    'cost' => 12
];


$sql = "SELECT * FROM user WHERE email='$email'"; /* Check if the username is exist in database*/

$result = $conn->query($sql);

if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();  // To fetch the row of data in database

        // Verify the password by comparing the hash password with the input from user
        if (password_verify($oldpasswd, $row['password'])){

            if($oldpasswd != $newpasswd){

                $hashpwd = password_hash($newpasswd, PASSWORD_BCRYPT, $option);

                $sqls = "UPDATE user SET password='".$hashpwd."' WHERE email='".$email."'"; /* Check if the username is exist in database*/

                if($conn->query($sqls) === TRUE){
                    echo "<script type='text/javascript'> alert('The password changed successfully!.') </script>";
                    echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../updatepass.php\">";
                }
                else{
                    echo "<script type='text/javascript'> alert('Failed to change password.') </script>";
                }

            }
            else{
                echo "<script type='text/javascript'> alert('New password should be different from the old password.') </script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Invalid email or password. Please try again.') </script>";
            // refresh the page // if success then it will navigate to the next page
            echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../updatepass.php\">"; // refresh the page
            exit();
        }
} else {
    echo "Failed.";
    session_unset();
    echo "<meta http-equiv=\"refresh\" content=\"0.1;URL=../updatepass.php\">";
}


//Close specified connection
$conn->close();

?>


