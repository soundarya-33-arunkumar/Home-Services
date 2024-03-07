<!DOCTYPE html>

<head id="head-dashboard">

<title>
    Sign Up
</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/external.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="images/icon.png">
</script>
</head>

<body class="body-dashboard">
    <header>

    </header>
    <section>
        <article>

            <div 
            style="float: right; 
            margin: -20px 110px; 
            color: black; 
            font-weight: bold;">
                <h1 style="font-size: 30px;">
                    SIGN UP
                </h1>
            </div>
            <div class="registerbox">
                
                <img src="images/avatar.jpg" class="avatar">
                
                <form class="form-group" method="post" action="processdataPHP/sendregister.php" onsubmit="return register()">
                    <div class="registname-div">
                        <i class="fa fa-user icon"></i>
                        <input type="text" id="fname" name="fname" placeholder="First Name" required class="form-control">
                        <i class="fa fa-user icon"></i>
                        <input type="text" id="lname" name="lname" placeholder="Last Name" required class="form-control">
                    </div>
                    <div class="regist-div">
                        <i class="fa fa-envelope icon"></i>
                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="regist-div">
                        <i class="fa fa-lock icon"></i>
                        <input type="password" id="mypassword" name="mypassword" placeholder="Password" required>
                        <i class="fa fa-eye icon" id="mypassword" onclick="showpassword()"></i>
                    </div>
                    <input type="submit" name="" value="Sign up">
                    <p style="text-align: center; margin: -10px;">Already have an account 
                        <a href="login.php" class="login-link" style="font-size: 15px; font-weight: bold; color: black;">Sign in</a></p>
                </form>
            </div>



        </article>
    </section>
    <footer>

    </footer>
</header>
    
</body>
</html>