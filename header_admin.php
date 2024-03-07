<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/external.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/icon.png">

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the current page URL
        var currentPage = window.location.href;

        // Check the current page and set the 'selected' class accordingly
        if (currentPage.includes("dashboard-admin.php")) {
            document.getElementById("dashboardLink").classList.add("selected");
        } else if (currentPage.includes("view-rating.php")) {
            document.getElementById("ratingLink").classList.add("selected");
        }
        // Add similar conditions for other menu links
    });
</script>

    
    </head>
    <body>
    <nav>
        <div class="topnav" id="myTopnav">
            <a href="dashboard-admin.php" id="dashboardLink" class="menu-item">Client Booking</a>
            <a href="view-rating.php" id="ratingLink" class="menu-item">View Rating</a>
            <a id="logout" href="../login.php">Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        
    </nav>
    </body>
</html>