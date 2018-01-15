<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        
        <!--jQuery-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <!--Font Awesome-->
        <link rel="stylesheet" type="text/css" href="css/fa/css/font-awesome.min.css">
        
        <!--Stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <title>FORUM</title>
        <style type="text/css">

            #question {
                margin-left: 100px;
            }
            
            .inputSettings {
                border: 2px solid #19D1FF;
                border-radius: 10px;
                padding: 5px 10px;
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
          <a href="#" id="message">Messages<img src="images/message.png" id="messageImage"></a>
          <a href="#" id="friends">Friends<img src="images/friend.png" id="friendImage"></a>
          <a href="#" id="mentors">Mentors<img src="images/mentor.png" id="mentorImage"></a>
          <a href="#" id="settings">Settings<img src="images/setting.png" id="settingImage"></a>
        </div>

        <div>
          <h2 style="text-align: center;">FORUM</h2>
          <div style="float: left;" id="question">
              <p><input type="text" placeholder="Question">
              <input type="button" value="Ask a new question"></p> 
          </div>
        </div>
        
        <button id="showChat"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button>
        
        <div id="activeUsers">
            <button id="hideChat"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>Active Users
            <hr>
            <p>
                <input type="text" placeholder='&nbsp;&#xF002;&nbsp;SEARCH' style="font-family: FontAwesome;width: 199px; position: absolute; bottom: 0">
            </p>
        </div>
        
        <script type="text/javascript">
            
            $("#hideChat").click(function() {
               $("#activeUsers").fadeOut("slow", function() {
                   $("#showChat").show();
               });    
            });
            
            $("#showChat").click(function() {
               $("#showChat").hide();
               $("#activeUsers").fadeIn("slow"); 
            });
            
        </script>
        
    </body>
</html>