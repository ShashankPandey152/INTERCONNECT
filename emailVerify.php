<?php

    session_start();

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net", "interconnect-3237e9c9", "password98@", "interconnect-3237e9c9");
    
    if(isset($_POST['resend'])) {
        $to = $_SESSION['email'];
        $subject = "Email Verification";
        $message = '

Please click this link to activate your account:
http://siddhartha-com.stackstaging.com/verify.php?email='.$mail.'

This is a system generated mail. Do not reply. 
        ';
        $headers = 'From:no-reply@interconnect.com' . "\r\n"; 
        if(mail($to, $subject, $message, $headers)) {
            echo "<script> alert('Verification mail sent. Please verify your email address!'); </script>";
        } else {
            echo "<script> alert('Oops there was some error, please come back after some time!'); </script>";
        }
    }

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
        <title>EMAIL CONFIRMATION</title>
        
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        
        <!--jQuery-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <!--Google Font Patrick Hand-->
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">

        <!--Stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <style type="text/css">
            
            #navbar{
                width: 100%;
                height: 50px;
                background-color: #333;
                font-size: 40px;
                color: white;
            }
            .navbar-custom {
                background: #19D1FF;
            }
            .navbar-brand {
                color: white;
                font-weight: bold;
                font-size: 150%;
            }
            #resend {
                background: #19D1FF;
                color: white;
                font-weight: bold;
                padding: 5px 10px;
                border: 2px solid white;
                border-radius: 10px;
                text-transform: uppercase;
            }
            #text {
                font-family: 'Patrick Hand SC', cursive;
                font-size: 150%;
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
            <br><br>
            <span id="text">Please verify email address!<br>If you accidently deleted the mail, Click on Resend.</span>
            <br><br><br>
            <form method="post">
                <button id="resend" name="resend">Resend</button>
            </form>
        </div>
    </body>
</html>