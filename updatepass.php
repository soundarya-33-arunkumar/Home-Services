
<!DOCTYPE html>

<head id="head-dashboard">

<title>
    Update Password
</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/external.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="images/icon.png">

</script>
</head>

<body id="body-dashboard">
    <header>

    </header>
    
    
    <section>
        <article class="box">
            <header>
                <h2 class="profile">CHANGE PASSWORD</h2>
            </header>

            <div class="whitebox">
                <form id="myForm" name="myForm" method="post" action="processdataPHP/sendpass.php">
                    <table>
                        <tr>
                            <td>Old Password: </td>
                            <td><input required="required" type="text" name="oldpass" id="oldpass" ></td>
                        </tr>
                        <tr>
                            <td>New Password: </td>
                            <td><input required="required" type="text" name="newpass" id="newpass"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn" name="submit" value="Send">
                                <a href="profile.php"> <input type="button" class="btn" name="back" value="Back"></a>
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