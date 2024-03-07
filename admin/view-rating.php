<?php
session_start();
include('../inc/connect.php');
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>

<head id="head-dashboard">
    <title>
        Rating
    </title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/external.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
        include('../header_admin.php');
?>

<body id="body-dashboard">
    <section>
        <article>
            <div class="wrapper-dashboard">
                <h2 style="text-align: center; margin-bottom: 20px;">Rating</h2>
                <table border="1px">
                <?php

                   $sql = "SELECT * from feedback";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        
                        // output data of each row
                        echo "<tr>";
                        echo "<th>No</th>";
                        echo "<th>User ID</th>";
                        echo "<th>Rating</th>";
                        echo "<th>Review</th>";
                        echo "</tr>";

                        $count = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . $row['user_id'] . "</td>";
                            echo "<td>" . $row['rating'] . "</td>";
                            echo "<td>" . $row['review'] . "</td>";
                            
                            echo "</tr>";
                        }
                    }else{
                        echo "<p style=\"text-align: center;\"> No record found </p>";
                    }
                ?>
                </table>
            </div>
        </article>
    </section>
    <footer>
    </footer>
</body>

</html>
