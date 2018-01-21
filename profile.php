<?php

    session_start();

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net", "interconnect-3237e9c9", "password98@", "interconnect-3237e9c9");
    
    if(isset($_POST['logout'])) {
        $_SESSION['id'] = "";
        $_SESSION['name'] = "";
        echo "<script> location.href='/'; </script>";
    }

    //Fetching details
    $query = "SELECT * FROM `users` WHERE `id` = '".mysqli_real_escape_string($link, $_SESSION['id'])."'";
    $row = mysqli_fetch_array(mysqli_query($link, $query));

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        
        <!--jQuery-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <!--Font Awesome-->
        <link rel="stylesheet" type="text/css" href="css/fa/css/font-awesome.min.css">
        
        <!--Stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <title>PROFILE</title>
        <style type="text/css">

            #logout {
                color: white;
                background: none;
                border: none;
                font-weight: bold;
            }
            
            #upload {
                margin-left: -500px;
            }
            
            @media screen and (max-width: 480px) {
                #upload {
                    margin-left: 10px;
                }
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
          <h2 style="text-align: center;">MY PROFILE</h2>
        </div>
        
        <div id="mainProfile" style="margin-left: 80px;">
        
            <div class="card">
              <img class="card-img-top" src="<?php if($row['dp'] == "") { echo "images/blank.jpeg"; } else { echo "images/dp/".$row['dp']; } ?>" alt="MY DP">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;"><?php echo $row['name']; ?></h5>
              </div>
            </div>

            <div id="details">
                Email: <?php echo $_SESSION['email']; ?><br><br>
                Interests: 
                <?php
                    $interests = Array();
                    $rem;
                    $len = 0;
                    $num = $row['interests'];
                    while($num != 0) {
                        $rem = $num % 10;
                        array_push($interests, $rem);
                        $len++;
                        $num = intval($num/10);
                    }
                    $interest = Array("ACTING","DANCING","SINGING","CODING","WRITING","SPORTS","PHOTOGRAPHY","COOKING","ARTS");
                    echo "<br>";
                    for($i = 0;$i<$len;$i++) {
                        echo $interest[$i]."&nbsp;&nbsp;";
                    }
                ?>
            </div>
            
        
        </div>
        
        <div id="upload">
            <hr id="hrUpload">
                <h5>Uploads</h5>
            </div>
        
        <button id="showChat"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></button>
        
        <div id="activeUsers" style="margin-top: -50px;">
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