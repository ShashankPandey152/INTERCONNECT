<?php

    $link = mysqli_connect("localhost","root","password@","interconnect");

    if(isset($_POST['selectSubmit'])) {
        echo "<script> alert('".$_POST['selectSubmit']."'); </script>";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <title>SELECT INTEREST(S)</title>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <style type="text/css">
            
            #navbar{
                width: 100%;
                height: 50px;
                background-color: #333;
                font-size: 40px;
                color: white;}
            .adj{
                height: 200px;
                width: 200px;
                border-radius: 50%;
                align-content: center;
            }
            .navbar-custom {
                background: #19D1FF;
            }
            .navbar-brand {
                color: white;
                font-weight: bold;
                font-size: 150%;
            }
            
            #interests {
                text-align: center;
            }
            
            .circular {
                position: relative;
                filter: brightness(50%);
                display: inline-block;
                margin-left: 80px;
                margin-right: 80px;
                margin-bottom: 20px;
            }
            
            .interestTopic {
                font-size: 120%;
                font-weight: bold;
            }
            
            @media screen and (max-width: 480px) { 
                .circular {
                    margin: 10px;
                }
                .adj {
                    height: 110px;
                    width: 110px;
                }
            }
            
            
        </style>
    </head>
    <body>

        <nav class="navbar navbar-toggleable-md navbar-inverse navbar-custom">
          <a class="navbar-brand" href="#">INTERCONNECT</a>
        </nav>

        <div style="text-align: center;font-size: 180%;padding-bottom: 50px;">
            Select Your Interest(s)
        </div>
        
        <div id="interests">
            <div class="circular"><p class="interestTopic">ACTING</p><img class="adj" id="1" src="images/1.jpg"></div>
            <div class="circular"><p class="interestTopic">DANCING</p><img class="adj" id="2" src="images/2.jpg"></div>
            <div class="circular"><p class="interestTopic">SINGING</p><img class="adj" id="3" src="images/3.jpg"></div>
            <div class="circular"><p class="interestTopic">CODING</p><img class="adj" id="4" src="images/4.jpg"></div>
            <div class="circular"><p class="interestTopic">WRITING</p><img class="adj" id="5" src="images/5.jpg"></div>
            <div class="circular"><p class="interestTopic">SPORTS</p><img class="adj" id="6" src="images/6.jpg"></div>
            <div class="circular"><p class="interestTopic">PHOTOGRAPHY</p><img class="adj" id="7" src="images/7.jpg"></div>
            <div class="circular"><p class="interestTopic">COOKING</p><img class="adj" id="8" src="images/8.jpg"></div>
            <div class="circular"><p class="interestTopic">ARTS</p><img class="adj" id="9" src="images/9.jpg"></div>
            <br><br>
            <p id="numberInterests">SELECTED INTERESTS: 0</p>
            <form method="post">
                <button class="btn btn-primary" name="selectSubmit" style="margin-bottom: 10px;" id="selectSubmit" value="">SUBMIT</button>
            </form>
        </div>
        
        <script type="text/javascript">
            var oneClicked = true, twoClicked = true, threeClicked = true, fourClicked = true, fiveClicked = true;
            var sixClicked = true, sevenClicked = true, eightClicked = true, nineClicked = true;
            var oneImage = $("#1").attr("src"), twoImage = $("#2").attr("src"), threeImage = $("#3").attr("src");
            var fourImage = $("#4").attr("src"), fiveImage = $("#5").attr("src"), sixImage = $("#6").attr("src");
            var sevenImage = $("#7").attr("src"), eightImage = $("#8").attr("src"), nineImage = $("#9").attr("src");
            var checked = 0, interests = [];
            $("#1").click(function() {
               if(oneClicked) {
                   $("#1").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#1").attr("src",oneImage);
                   checked -= 1;
               }
               oneClicked = !oneClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
            $("#2").click(function() {
               if(twoClicked) {
                   $("#2").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#2").attr("src",twoImage);
                   checked -= 1;
               }
               twoClicked = !twoClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
            $("#3").click(function() {
               if(threeClicked) {
                   $("#3").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#3").attr("src",threeImage);
                   checked -= 1;
               }
               threeClicked = !threeClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
            $("#4").click(function() {
               if(fourClicked) {
                   $("#4").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#4").attr("src",fourImage);
                   checked -= 1;
               }
               fourClicked = !fourClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
            $("#5").click(function() {
               if(fiveClicked) {
                   $("#5").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#5").attr("src",fiveImage);
                   checked -= 1;
               }
               fiveClicked = !fiveClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
            $("#6").click(function() {
               if(sixClicked) {
                   $("#6").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#6").attr("src",sixImage);
                   checked -= 1;
               }
               sixClicked = !sixClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
            $("#7").click(function() {
               if(sevenClicked) {
                   $("#7").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#7").attr("src",sevenImage);
                   checked -= 1;
               }
               sevenClicked = !sevenClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
            $("#8").click(function() {
               if(eightClicked) {
                   $("#8").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#8").attr("src",eightImage);
                   checked -= 1;
               }
               eightClicked = !eightClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
            $("#9").click(function() {
               if(nineClicked) {
                   $("#9").attr("src","images/tick.png");
                   checked += 1;
               } else {
                   $("#9").attr("src",nineImage);
                   checked -= 1;
               }
               nineClicked = !nineClicked;
               document.getElementById("numberInterests").innerHTML = "SELECTED INTERESTS: " + checked;
            });
        </script>

    </body>
</html>