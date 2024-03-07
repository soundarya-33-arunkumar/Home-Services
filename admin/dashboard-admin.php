<?php
session_start();
include('../inc/connect.php');
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>

<head id="head-dashboard">
    <title>
        Dashboard
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
                <h2 style="text-align: center; margin-bottom: 20px;">Client Booking</h2>
                <table border="1px">
                    <?php

                   $sql = "SELECT appointment.*, service.service_name 
                        FROM appointment 
                        INNER JOIN appointment_service ON appointment.appointment_id = appointment_service.appointment_id 
                        INNER JOIN service ON service.service_id = appointment_service.service_id
                        WHERE appointment.status='pending';";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {

                        
                        // output data of each row
                        echo "<tr>";
                        echo "<th>No</th>";
                        echo "<th>Booking Id</th>";
                        echo "<th>Services</th>";
                        echo "<th>Date</th>";
                        echo "<th>Time</th>";
                        echo "<th>Status</th>";
                        echo "</tr>";

                        $count = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . $row['appointment_id'] . "</td>";
                            echo "<td>" . $row['service_name'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['time'] . "</td>";
                            echo "<td>";
                            echo "<form method='post' action='../processdataPHP/update_status.php'>";
                            echo "<input type='hidden' name='appointment_id' value='" . $row['appointment_id'] . "'>";
                            echo "<select name='status'>";
                            echo "<option value='Pending'>Pending</option>";
                            echo "<option value='Completed'>Completed</option>";
                            echo "</select>";
                            echo "<input type='submit' value='Update'>";
                            echo "</form>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    }else{
                        echo "<p style=\"text-align: center;\"> No record found </p>";
                    }
                    ?>
                </table>
            </div>

            <div class="wrapper-dashboard">
                <h2 style="text-align: center; margin-bottom: 20px;">Complete Booking</h2>
                <table border="1px">
                    <tr>
                    <?php

                   $sql2 = "SELECT appointment.*, service.service_name 
                        FROM appointment 
                        INNER JOIN appointment_service ON appointment.appointment_id = appointment_service.appointment_id 
                        INNER JOIN service ON service.service_id = appointment_service.service_id
                        WHERE appointment.status='Completed';";

                    $result2 = $conn->query($sql2);

                    if ($result2->num_rows > 0) {

                       // output data of each row
                        echo "<tr>";
                        echo "<th>No</th>";
                        echo "<th>Booking Id</th>";
                        echo "<th>Services</th>";
                        echo "<th>Date</th>";
                        echo "<th>Status</th>";
                        echo "</tr>";

                        $count = 1;
                        while ($row = $result2->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . $row['appointment_id'] . "</td>";
                            echo "<td>" . $row['service_name'] . "</td>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
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
