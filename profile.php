<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <title>profilepage</title>
        <style type="text/css">

            /* Style the links inside the sidenav */
            #mySidenav a {
                position: absolute; /* Position them relative to the browser window */
                left: -120px; /* Position them outside of the screen */
                transition: 0.3s; /* Add transition on hover */
                padding: 15px; /* 15px padding */
                width: 180px; /* Set a specific width */
                text-decoration: none; /* Remove underline */
                font-size: 20px; /* Increase font size */
                color: white; /* White text color */
                border-radius: 0 5px 5px 0; /* Rounded corners on the top right and bottom right side */
            }

            #mySidenav a:hover {
                left: 0; /* On mouse-over, make the elements appear as they should */
            }

            /* The about link: 20px from the top with a green background */
            #home {
                top: 70px;
                background-color: #494958;
            }

            #feed {
                top: 130px;
                background-color: #2196F3;
            }

            #about {
                top: 190px;
                background-color: #f44336;
            }

            #message {
                top: 250px;
                background-color: #9bd32f;
            }

            #friends {
                top: 310px;
                background-color: #009f94;
            }

            #mentors {
                top: 370px;
                background-color: #445a2f; 
            }

            #settings {
                top: 430px;
                background-color: #631e50; 
            }
            .navbar-custom {
                background: #19D1FF;
            }
            .navbar-brand {
                color: white;
                font-weight: bold;
                font-size: 150%;
            }
            #homeImage {
                width: 25px;
                margin-left: 60px;
            }
            #feedImage {
                width: 30px;
                margin-left: 68px;
            }
            #aboutImage {
                width: 30px;
                margin-left: 52px;
            }
            #messageImage {
                width: 30px;
                margin-left: 21px;
            }
            #friendImage {
                width: 30px;
                margin-left: 40px;
            }
            #mentorImage {
                width: 25px;
                margin-left: 35px;
            }
            #settingImage {
                width: 25px;
                margin-left: 35px;
            }
            
        </style>
    </head>
    <body>

        <nav class="navbar navbar-toggleable-md navbar-inverse navbar-custom">
          <a class="navbar-brand" href="#">INTERCONNECT</a>
        </nav>

        <div id="mySidenav" class="sidenav">
          <a href="#" id="home">Home<img src="images/home.png" id="homeImage"></a>
          <a href="#" id="feed">Feed<img src="images/feed.png" id="feedImage"></a>
          <a href="#" id="about">About<img src="images/about.png" id="aboutImage"></a>
          <a href="#" id="message">Messages<img src="images/message.png" id="messageImage"</a>
          <a href="#" id="friends">Friends<img src="images/friend.png" id="friendImage"></a>
          <a href="#" id="mentors">Mentors<img src="images/mentor.png" id="mentorImage"></a>
          <a href="#" id="settings">Settings<img src="images/setting.png" id="settingImage"></a>
        </div>

        <div style="margin-left:80px;">
          <h2>Profile</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        
    </body>
</html>