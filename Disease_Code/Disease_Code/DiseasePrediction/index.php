
<!DOCTYPE html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
    <head>  
        <title>Health Predictor  </title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/login.css">


        <style>

            button{
                cursor:pointer;
            }

        </style>

    </head>
    <body>



        <?php
        include "login.php";
        ?> 
        <section class="container content" style="background-image: url('images/fpp.jpg');  
  height:100vh;
  width: 100%;
  
  background-position: center;
  
  background-repeat: no-repeat;
  
  background-size: cover;
  
  text-align: center;">
            <div class="hompage">

                <!--<h2 style="color:black;">What concerns you about your health today ?</h2>-->
                <h1 style="color:white">Check your symptoms and find out what could be 
                    causing them ,It's fast ,free and anonymous.
                </h1>
                <ul>
                    <li><button class="homepage-button"onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;"><a>Login as Admin</a></button></li>
                    <li> <button class="homepage-button"><a href="intro.php">Start Checkups</a></button></li>

                </ul>
            </div>
        </section>


    </body>
</html>