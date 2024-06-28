<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta cgarset="UTF-8">
        <meta htto-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/register.css">
        <title>Register</title>
    </head>
    <body>
    <style>
           body{
            background-image:url("p4.jpg");
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size:100% 100%;
            }
    </style>
        <div class="container">
            <div class="box form-box">
                <header>Register</header>
                <form action="singup.inc.php" method="post">
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="name" id="username" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="age">Age</label>
                        <input type="number" name="age" id="age" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>
                    <div class="field input">
                        <label for="confirm password">Confirm Password</label>
                        <input type="confirm password" name="confiPassword" id="confirm password" autocomplete="off" required>
                    </div>
                    <div class="field">
                        
                        <input type="submit" class="btn" name="signUP_button" value="Register" required>
                    </div>
                    <div class="links">
                        Already a member? <a href="nlogin.php">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>