<!DOCTYPE html>

<head id="head-dashboard">

<title>
    Feedback
</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/external.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="images/icon.png">

</script>
</head>

<body id="body-dashboard">
    
    <?php
        include('header.php');
    ?>
    
    <section>
        <article>
            <header>
                <h2 class="feedback"> </h2>
            </header>

            <center>
                <div class="wrapper-feedback">
                    <h2 style="text-align: center; margin-bottom: 20px;">We Would Love to Hear from You!</h2>
                    <form method="post" action="processdataPHP/sendfeedback.php" onsubmit="return validatefeedback()">
                        <table>
                            <tr>
    
                                <td colspan="2">
                                    <p class= "rate">On a scale 0-5 (Not all satisfied/ to very satisfied)</p>
                                </td>
                            </tr>
                            <tr>
    
                                <td colspan="2">
                                    <p class= "rate">How would you rate us?</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <select id="rate" name="rate">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <p class="reason">Please tell us why are you giving this score. </p>
    
                                </td>
    
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label><textarea id="message" name="message" rows="5" cols="50" placeholder="add some description here..."></textarea></label>
    
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Send">
                                    <a href="contactus.php">
                                    <input type="button" name="back" value="Back">
                                    </a>
    
                                </td>
                            </tr>
        
                    </table>
                    </form>
                </div>
            </center>
        </article>
    </section>
    <footer>

    </footer>
</header>
    
</body>
</html>