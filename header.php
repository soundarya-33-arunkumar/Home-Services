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
        if (currentPage.includes("dashboard.php")) {
            document.getElementById("homeLink").classList.add("selected");
        } else if (currentPage.includes("services.php")) {
            document.getElementById("servicesLink").classList.add("selected");
        }else if (currentPage.includes("aboutus.php")) {
            document.getElementById("aboutLink").classList.add("selected");
        } else if (currentPage.includes("contactus.php")) {
            document.getElementById("contactLink").classList.add("selected");
        }
        // Add similar conditions for other menu links
    });
</script>



    
</head>
<body>
    <nav>
        <div class="topnav" id="myTopnav">
            <a href="dashboard.php" id="homeLink" class="menu-item">Home</a>
            <a href="services.php" id="servicesLink" class="menu-item">Services</a>
            <a href="aboutus.php" id="aboutLink" class="menu-item">About</a>
            <a href="contactus.php" id="contactLink" class="menu-item">Contact Us</a>
            <a id="logout" href="login.php" class="menu-item">Logout</a>
            <a id="profile" href="profile.php" class="menu-item">Profile</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </nav>
</body>
</html>

