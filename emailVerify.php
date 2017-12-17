<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <title>EMAIL CONFIRMATION</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Patrick+Hand+SC" rel="stylesheet">

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
            
        </style>
    </head>
    <body>
        <nav class="navbar navbar-toggleable-md navbar-inverse navbar-custom">
          <a class="navbar-brand" href="#">INTERCONNECT</a>
        </nav>
        <div style="text-align: center;">
            <br><br>
            <span id="text">Please verify email address!<br>If you accidently deleted the mail, Click on Resend.</span>
            <br><br><br>
            <button id="resend">Resend</button>
        </div>
    </body>
</html>