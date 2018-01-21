<?php

    session_start();

    if(isset($_POST['logout'])) {
        $_SESSION['id'] = "";
        $_SESSION['name'] = "";
        echo "<script> location.href='/'; </script>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <title>UPLOAD IMAGE</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <style type="text/css">
            
            #navbar{
                width: 100%;
                height: 50px;
                background-color: #333;
                font-size: 40px;
                color: white;
            }
            img{
                height: 200px;
                width: 200px;
                border: 2px solid black;
                display: inline-block;
            }
            .navbar-custom {
                background: #19D1FF;
            }
            .navbar-brand {
                color: white;
                font-weight: bold;
                font-size: 150%;
            }
            #upload {
                background: #19D1FF;
                border: 2px solid white;
                padding: 5px 10px;
                color: white;
                text-transform: uppercase;
                font-weight: bold; 
                border-radius: 10px;
            }
            #logout {
                color: white;
                font-weight: bold;
                background: none;
                border: none;
            }
            
        </style>
    </head>
    <body>

        <nav class="navbar navbar-toggleable-md navbar-inverse navbar-custom">
          <a class="navbar-brand" href="#">INTERCONNECT</a>
          <form method="post">
            <button id="logout" name="logout">LOGOUT</button>
          </form>
        </nav>
        <div style="text-align: center;">
            <br><br><br><br>
            <img  src="images/blank.jpeg">
            <br><br>
            <h3>Upload an Image</h3>
            <input type="file" accept="image/*" autocomplete=off><br><br>
            <button type="button" style="font-size: 15px;" id="upload">Upload</button>
        </div>
    </body>
</html>