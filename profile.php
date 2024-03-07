<?php

    session_start();
    include('inc/connect.php'); // include the connect.php file
?>

<!DOCTYPE html>
<html>

<head id="head-dashboard">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/external.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
</head>

<body id="body-dashboard">
    <header>
        <!-- Your header content goes here -->
    </header>

    <?php

    $email = $_SESSION['email'];
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    // var_dump($result->num_rows);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo "<section>";
            echo "<article class=\"box\">";
            echo "<header>";
            echo "<h2 class=\"profile\">PROFILE USER</h2>";
            echo "</header>";
            echo "<div class=\"whitebox\">";
            echo "<form id=\"myForm\" name=\"myForm\" method=\"post\" action=\"processdataPHP/sendupdateprofile.php\" onsubmit=\"return validateForm()\">";
            echo "<table>";
            echo "<tr>";
            echo "<td>First Name: </td>";
            echo "<td><input required=\"required\" type=\"text\" name=\"fname\" id=\"fname\" value='".$row['firstname']."' autofocus=\"\"></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<tr>";
            echo "<td>Last Name: </td>";
            echo "<td><input required=\"required\" type=\"text\" name=\"lname\" id=\"lname\" value='".$row['lastname']."' autofocus=\"\"></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Email: </td>";
            echo "<td><input required=\"required\" type=\"text\" name=\"email\" id=\"email\" value='".$row['email']."'  autofocus=\"\"></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Address: </td>";
            echo "<td><input required=\"required\" type=\"text\" name=\"address\" id=\"address\" value='".$row['address']."'  autofocus=\"\"></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan=\"2\" style=\"text-align: left;\"><a href=\"updatepass.php\"><input style=\"font-weight: bold;\" type=\"button\" name=\"btnchangepass\" id=\"btnchangepass\" value=\"Change Password\" ></a></td>";
            echo "</tr>";
            echo "<tr >";
            echo "<td colspan=\"2\">";
            echo "<input class=\"btn\" type=\"submit\" name=\"submit\" value=\"Save\">";
            echo "<a href=\"services.php\"> <input type=\"button\" class=\"btn\" name=\"back\" value=\"Back\"></a>";
            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</form>";
            echo "</div>";
            echo "</article>";
            echo "</section>";
        }
    }
    else {
    echo "0 result";
    }
    $conn->close();
?>
