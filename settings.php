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
        
        <!--jQuery UI-->
        <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
        <script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
        
        <title>SETTINGS</title>
        <style type="text/css">

            #accordion {
                width: 70%; 
                margin-left: 135px; 
                float: left;
            }
            
            .inputSettings {
                border: 2px solid #19D1FF;
                border-radius: 10px;
                padding: 5px 10px;
            }
            
            #changePassword {
                background: white;
                border: 2px solid #19D1FF;
                color: #19D1FF;
                font-weight: bold;
                padding: 5px 10px;
                border-radius: 10px;
            }
            
            #changePassword:hover {
                background: #19D1FF;
                color: white;
            }
            
            @media screen and (max-width: 480px) {
                #accordion {
                    margin-left: 80px;
                }
                .inputSettings {
                    width: 120%;
                    margin-left: -20px;
                }
            }
            
        </style>
        
        <script>
           $( function() {
                $( "#accordion" ).accordion( {
                    collapsible: true,
                    active: false
                });
          } );
        </script>
        
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
          <h2 style="text-align: center;">SETTINGS</h2>
          <div id="accordion">
              <h3>Privacy Settings</h3>
              <div>
                <p>
                    Who can see your post(s): 
                    <select class="inputSettings">
                        <option>--Select an option--</option>
                        <option>Me</option>
                        <option>Friends</option>
                        <option>Mutual Friends</option>
                        <option>Everyone</option>
                    </select>
                </p>
              </div>
              <h3>Security Settings</h3>
              <div>
                <p><input type="password" class="inputSettings" placeholder="Old Password"></p>
                <p><input type="password" class="inputSettings" placeholder="New Password"></p>
                <p><input type="password" class="inputSettings" placeholder="Confirm New Password"></p>
                <p><input type="submit" id="changePassword" value="Change Password"></p>
              </div>
              <h3>General Settings</h3>
              <div>
                <p><input type="text" class="inputSettings" placeholder="Name"></p>
                <p>Select Interest(s):</p>
                <p><input type="checkbox">Acting</p>
                <p><input type="checkbox">Dancing</p>
                <p><input type="checkbox">Singing</p>
                <p><input type="checkbox">Coding</p>
                <p><input type="checkbox">Writing</p>
                <p><input type="checkbox">Sports</p>
                <p><input type="checkbox">Photography</p>
                <p><input type="checkbox">Cooking</p>
                <p><input type="checkbox">Arts</p>
                <p><input type="submit" id="changePassword" value="Submit"></p>
              </div>
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