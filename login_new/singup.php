<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Document</title>
    <style>
        body{
            background-image: url(../img/log.jpg);
        }
    </style>
   
 </head>
 <body>


 <div class="container">
        <div class="box form-box">
            <header>Register</header>
            <form action="singup.inc.php" method="post">
            <!-- <input type="text" name="name" placeholder="Name">
            <input type="number" name="age" placeholder="age">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="password" placeholder="Password"> -->

                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="name" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="confirm password">Confirm Password</label>
                    <input type="password" name="confiPassword" id="confirm password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input class="btn" type="submit" name="signUP_button" value="Sign Up">
                </div>

                <div class="links">
                    Already a member? <a href="login.php">Log In</a>
                </div>

            
        </form>

        
    </div>
 </div>
 

 </body>
 </html>