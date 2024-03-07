<?php
// Initialize a session.
session_start();
if (isset($_SESSION['email'])) {
    $_SESSION = array();
    session_destroy();
    echo "<meta http-equiv=\"refresh\" content=\"0.01;URL=login.php\">";
}
?>

<!DOCTYPE html>

<head id="head-dashboard">

<title>
    Login
</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/external.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="images/icon.png">

</script>
</head>

<body>
    <header>

    </header>
    
    
    <section>
        <article>
            <div class="loginbox">
                <img src="images/avatar.jpg" class="avatar">
                <h1>Sign In Here!</h1>
                <form method="POST" action="processdataPHP/SendLogin.php" onsubmit="return login()">
                    <div class="login-div">
                        <i class="fa fa-envelope icon"></i>
                        <input type="text" name="email" id="email" placeholder="Email Address">
                    </div>
                    <div class="login-div">
                        <i class="fa fa-lock icon"></i>
                        <input type="password" name="mypassword" id="mypassword" placeholder="Password">
                        <i class="fa fa-eye icon" id="mypassword" onclick="showpassword()"></i>
                    </div>
                    <input type="submit" name="" value="Sign In">
                    <p style="text-align: center;">Don't have an account? 
                        <a href="index.php" class="register-link" style="font-size: 20px; font-weight: bold; color: black;">Register</a>

                    </p>
                </form>
            </div>
        </article>
    </section>
    <footer>
    </footer>
</header>
    
</body>
</html>