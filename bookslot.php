<!DOCTYPE html>

<head id="head-dashboard">

<title>
    Book Slot
</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/external.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="images/icon.png">

</script>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        // Get the current date in the format "YYYY-MM-DD"
        var today = new Date().toISOString().split('T')[0];

        // Set the minimum attribute of the date input to today
        document.getElementById('datebook').setAttribute('min', today);
    });
</script>

</head>

<body id="body-dashboard">
    <header>

    </header>
    <?php
        include('header.php');
    ?>
    
    <section>
        <article>
            <div class="wrapper-booking">
                <h2 style="text-align: center; margin-bottom: 20px;">BOOK SLOT</h2>
                <form id="myForm" name="myForm" action="processdataPHP/sendbookslot.php" method="post" onsubmit="return booking()">
                    <table>
                        <tr>
                            <td>Services:</td>
                            <td>
                                <select name="bookservice" onchange="services(this.value)">
                                    <option value="1">House Cleaning</option>
                                    <option value="2">Lawn Maintenance</option>
                                    <option value="3">Pest Control</option>
                                  </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a target="_blank" href="viewservicesdetails.php">Click this link</a> to view detail services</td>
                        </tr>
                        <tr>
                            <td>Date:</td>

                            <td><input type="date" id="datebook" name="datebook" required></td>
                        </tr>
                        <tr>
                            <td>Time:</td>
                            <td>
                                <select name="timeservice" onchange="timeserv(this.value)" required>
                                    <option value="10:00">10.00 AM (Morning session)</option>
                                    <option value="15:00">3.00 PM (Evening session)</option>
                                  </select>
                            </td>
                        </tr>

                        
                        <tr>
                            <td>Description:</td>
                            <td>
                                <label><textarea  id="descbook" name="descbook" rows="5" cols="50" placeholder="add some description to describe the problem"></textarea></label>
                        
                            </td>
                                
                        </tr>
                        <tr>
                            <td>
                                <a href="services.php">
                                    <input type="button" id="back" name="back" value="Back" style="float: left;" >
                                </a>
                            </td>
                            <td>
                                
                                <input type="submit" id="btnsubmit" name="btnsubmit">
                            </td>
                        </tr>
    
    
                    </table>
                </form>
            </div>

            
        </article>
    </section>
    <footer>

    </footer>
</header>
    
</body>
</html>