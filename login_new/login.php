<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Document</title>
    <style>
        .form{
            height: 280px;
        }
        body{
            background-image: url(../img/log.jpg);
        }
    </style>

 </head>
 <body>
    <div class="container">
        <div class="box form-box">
        <header>Login</header>
        <form method="post" action="login.inc.php">
            <div class="field input">
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="field input">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="field">
                <input type="submit" class="btn" name="login_button" value="Log in" required >
            </div>
            <div class="links">
            Don't have account?  <a href="singup.php">Register</a>
            </div>
        </form>
    </div>
    
 </body>
 </html>