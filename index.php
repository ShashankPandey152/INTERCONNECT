<?php

    session_start();

    $link = mysqli_connect("shareddb-g.hosting.stackcp.net", "interconnect-3237e9c9", "password98@", "interconnect-3237e9c9");

    //Login
    if(isset($_POST['logSubmit'])) {
        if($_POST['logEmail'] != "" && $_POST['logPassword'] != "") {
            if(!filter_var($_POST['logEmail'], FILTER_VALIDATE_EMAIL)) {
                echo "<script> alert('Invalid email address!'); </script>";
            } else {
                $query = "SELECT * FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['logEmail'])."'";
                $result = mysqli_query($link, $query);
                if(mysqli_num_rows($result) == 0) {
                    echo "<script> alert('Account does not exist. Sign up first!'); </script>";
                } else {
                    $row = mysqli_fetch_array($result);
                    if($_POST['logPassword'] == $row['password']) {
                        $name = $row['name'];
                        echo "<script> alert('Logged in successfully. Welcome back $name'); </script>";
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['email'] = $row['email'];
                        /*if($row['status'] == 0) {
                            echo "<script> location.href = 'emailVerify'; </script>";
                        } else if($row['interests'] == 0) {
                            echo "<script> location.href = 'select'; </script>";
                        } else if($row['dp'] == "") {
                            echo "<script> location.href = 'uploadImage'; </script>";
                        } */
                        echo "<script> location.href = 'profile'; </script>";
                    } else {
                        echo "<script> alert('Incorrect credentials!'); </script>";
                    }
                }
            }
        } else {
            echo "<script> alert('Complete the form!'); </script>";
        }
    }

    //Signup 
    if(isset($_POST['signSubmit'])) {
        if($_POST['signName'] != "" && $_POST['signEmail'] != "" && $_POST['signPassword'] != "" && $_POST['signConfirmPassword'] != "" && $_POST['accountType'] != "" && $_POST['acceptTerms'] == 1) {
            $errors = 0;
            $errorMsg = "";
            if(!filter_var($_POST['signEmail'], FILTER_VALIDATE_EMAIL)) {
                $errors++;
                $errorMsg .= "\\nInvalid email address!";
            }
            if($_POST['signPassword'] != $_POST['signConfirmPassword']) {
                $errors++;
                $errorMsg .= "\\nPasswords do not match!";
            }
            $query = "SELECT `id` FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['signEmail'])."'";
            $result = mysqli_query($link, $query);
            if(mysqli_num_rows($result) > 0) {
                $errors++;
                $errorMsg .= "\\nAccount exists already!";
            }
            if($errors > 0) {
                echo "<script> alert('$errorMsg'); </script>";
            } else {
                $query = "INSERT INTO `users`(`name`, `email`, `password`, `type`) VALUES('".mysqli_real_escape_string($link, $_POST['signName'])."', '".mysqli_real_escape_string($link, $_POST['signEmail'])."', '".mysqli_real_escape_string($link, $_POST['signPassword'])."', '".mysqli_real_escape_string($link, $_POST['accountType'])."')";
                if(mysqli_query($link, $query)) {
                    echo "<script> alert('Account created successfully!'); </script>";
                    $to = $_POST['signEmail'];
                    $subject = "Email Verification";
                    $message = '
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.

------------------------
Username: '.$_POST['signEmail'].'
Password: '.$_POST['signPassword'].'
------------------------

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
                } else {
                    echo "<script> alert('There was a problem in signing you up, please come back later!'); </script>";
                }
            }
            
        } else {
            echo "<script> alert('Complete the form!'); </script>";
        }
    }

    //Forgot Password
    if(isset($_POST['forgotSubmit'])) {
        if($_POST['forgotEmail'] != "") {
            if(!filter_var($_POST['forgotEmail'], FILTER_VALIDATE_EMAIL)) {
                echo "<script> alert('Invalid email address!'); </script>";
            } else {
                $query = "SELECT `id` FROM `users` WHERE `email` = '".mysqli_real_escape_string($link, $_POST['forgotEmail'])."'";
                if(mysqli_num_rows(mysqli_query($link, $query)) == 0) {
                    echo "<script> alert('This email is not linked with an account, sign up first!'); </script>";
                } else {
                    $to = $_POST['forgotEmail'];
                    $subject = "Forgot password";
                    $message = '

Please click this link to change your password:
http://siddhartha-com.stackstaging.com/verify.php?email='.$mail.'

This is a system generated mail. Do not reply. 
                    ';
                    $headers = 'From:no-reply@interconnect.com' . "\r\n"; 
                    if(mail($to, $subject, $message, $headers)) {
                        echo "<script> alert('Password reset mail sent, please check your inbox!'); </script>";
                    } else {
                        echo "<script> alert('Oops there was some error, please come back after some time!'); </script>";
                    }
                }
            }
        } else {
            echo "<script> alert('Enter email address first!'); </script>";
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>INTERCONNECT</title>
        
        <!--jQuery-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
        
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
        <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
        
        <!--Stylesheets-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
              
        <style type="text/css">
        
            .center {
                text-align: center;
            }
            
            .logSign {
                background-color: white;
                padding: 5px 10px;
                font-weight: bold;
            }
            
            .logSign:hover {
                background-color: black;
                color: white;
            }
            
            #login {
                border: 2px 0 2px 2px;
                border-color: black;
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
            }
            
            #signup {
                border: 2px 2px 2px 0;
                border-color: black;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }
            
            .input {
                width: 65%;
                border-radius: 10px;
                border-color: black;
                padding-left: 10px;
            }
            
            .radioText {
                border: none;
                background: none;
            }
            
            button:focus {
                outline: none;
            }
            
            body {
                background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/background.jpg'); 
                background-size: 70%
            }
            
            .credentials {
                background: white; 
                padding: 10px; 
                width: 40%; 
                margin: 0 auto;
                margin-top: 50px;
                border-radius: 20px;
                box-shadow: 5px 5px 10px #707070;
            }
            
            #forgot {
                background: none;
                border: none;
                color: blue;
            }
            
            #acceptButton {
                background: none;
                border: none;
                margin-top: 10px;
            }
            
            @media screen and(max-width: 480px) {
                
                .credentials {
                    background: red;
                }
                
            }
            
        </style>
    </head>
    <body>

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div class="center credentials">
            <h1 style="font-family: 'Bungee', cursive; margin-top: 30px;">INTERCONNECT</h1>
            <p style="font-family: 'Dancing Script', cursive; font-weight: bold; font-size: 120%;">CONNECT WITH PEOPLE WHO SHARE YOUR INTEREST</p>
            <div id="normal">
                <button type="button" id="login" class="logSign">LOGIN</button><button type="button" id="signup" class="logSign">SIGNUP</button>
                <br><br>
                <!--Login Form-->
                <div id="loginForm">
                    <form method="post">
                        <input type="text" placeholder="Email address" class="input" name="logEmail"><br><br>
                        <input type="password" placeholder="Password" class="input" name="logPassword"><br><br>
                        <button type="button" id="forgot">Forgot Password</button><br><br>
                        <button class="btn btn-primary" name="logSubmit">SUBMIT</button>
                    </form>
                </div>
                <!--Signup Form-->
                <div id="signupForm" style="display: none;">
                    <form method="post">
                        <input type="text" placeholder="Full Name" class="input" name="signName"><br><br>
                        <input type="text" placeholder="Email address" class="input" name="signEmail"><br><br>
                        <input type="password" placeholder="Password" class="input" name="signPassword"><br><br>
                        <input type="password" placeholder="Confirm Password" class="input" name="signConfirmPassword"><br><br>
                        You are a: &nbsp;&nbsp;
                        <input type="radio" id="mentor" name="accountType" value="1"><button type="button" class='radioText' value="1">Mentor</button>
                        <input type="radio" id="student" name="accountType" value="2"><button type="button" class='radioText' value="2">Student</button><br>
                        <input type="checkbox" id="acceptTerms" value="1" name="acceptTerms">&nbsp;<button type="button" id="acceptButton">I accept terms and conditions.</button><br><br>
                        <button class="btn btn-primary" name="signSubmit">SUBMIT</button>
                    </form>
                </div>
            </div>
            <div id="forgotPassword" style="display: none;">
                <p style="font-family: 'Bungee', cursive;">FORGOT PASSWORD</p>
                <form method="post">
                    <input type="text" placeholder="Email address" class="input" name="forgotEmail"><br><br>
                    <button class="btn btn-primary" name="forgotSubmit">SUBMIT</button>
                </form>
            </div>
        </div>
        
        <script type="text/javascript">
            
            var isCheckedTerms = false;
            
            $("#login").css("background-color","black");
            $("#login").css("color","white");
        
            /* Set the width of the side navigation to 250px */
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            /* Set the width of the side navigation to 0 */
            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
            
            $("#main").click(function() {
               document.getElementById("mySidenav").style.width = "0";
            });
            
            $("#login").click(function() {
                $("#login").css("background-color","black");
                $("#login").css("color","white");
                $("#signup").css("background-color","white");
                $("#signup").css("color","black");
                $("#loginForm").show();
                $("#signupForm").hide();
            });
            
            $("#signup").click(function() {
                $("#signup").css("background-color","black");
                $("#signup").css("color","white");
                $("#login").css("background-color","white");
                $("#login").css("color","black");
                $("#loginForm").hide();
                $("#signupForm").show();
            });
            
            $(".radioText").click(function() {
                var value = $(this).val();;
                if(value == 1) {
                    $("#mentor").prop("checked",true);
                } else if(value == 2) {
                    $("#student").prop("checked",true);
                }
            });
            
            $("#forgot").click(function() {
               $("#normal").hide();
                $("#forgotPassword").show();
            });
            
            $("#acceptButton").click(function() {
               if(document.getElementById("acceptTerms").checked == true) {
                   $("#acceptTerms").prop("checked",false);
               } else {
                   $("#acceptTerms").prop("checked",true);
               }
               isCheckedTerms = !isCheckedTerms;
            });
            
        </script>
        
    </body>
</html>