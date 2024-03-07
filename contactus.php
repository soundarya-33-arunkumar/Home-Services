<!DOCTYPE html>

<head id="head-Contact Us">

<title>
    Contact us
</title>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/external.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="images/icon.png">
</script>
</head>

<body id="body-contact us">
    <header>
        <style>
            
           
            
            h1{
              color: black;
              font-family: "fantasy";
              font-size: 43.7px;
              margin-top: 10px;
              margin-bottom: 3px;
            }       

            h4, h5, h6{
              color: black;
              font-family: "fantasy";
              font-size: 23.7px;
              margin-top: 10px;
              margin-bottom: 3px;
              text-align:center;
              
            }       
          
            p{      
              color: black;
              font-family: arial;
              font-size: 14.8px;
              text-align:center;
            }
            a{
                color: black;
                font-weight: bold;
                font-style: normal;
                text-decoration: none;
            }  
            a:hover{

              font-size: 30px;
            }
           

            .rectangle {
              height: 100x;
              width: 500px;
              background-color: #ffff;
              position: absolute;
              top: 150px;
              left: calc(37% - 63px);
              opacity: 70%

            }

            .rectangle1{
              height: 450px;
              max-width: 300px;
              width: 100%;
              background-color: #ffff;
              display: inline-block;
              margin: 60px 60px;
              top: 200px;
              left: calc(70% - 50px);
              border-radius: 25px;
            
            }

            /* .justify-content{
                justify-content:center; tak guna :v
            } */ 

            .position{
              margin: 80px 90px;
            }

            .position img{
              height: 130px;
              width: 130px;
            }

            .padding{
              padding-top: 60px; /*atur tinggi tulisan*/
            }

            </style>

    </header>
    <?php
        include('header.php');
    ?>
    

    <section>
        <article>

            <h1>Want to get in touch?</h1>

            <div class="rectangle">
              <p>We would love to hear from you ! Here is how you can reach us.</p>
            </div>


            <div class="rectangle1">
              <div class="position">
                <img src="images\2.png" alt="social media graphic">
              </div>
              <div class="padding">
                <a href="walkin.php" ><h6>Walk in</h6></a>
                
              </div>
              
            </div>

            <div class="rectangle1">
              <div class="position">
                <img src="images\1.png" alt="social media graphic">
              </div>
              <div class="padding">
                <a href="feedback.php"><h5>Give your feedback</h5></a>
              </div>
            </div>

            <div class="rectangle1">
              <div class="position">
                <img src="images\3.png" alt="social media graphic">
              </div>
              <div class="padding">
                <a href="socialmedia.php"><h4>Find us on social media</h4></a>
              </div>
            </div>

       
        </article>
    </section>
    <footer>

    </footer>
</header>
    
</body>
</html>