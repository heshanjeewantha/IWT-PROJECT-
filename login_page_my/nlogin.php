<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">

    <style>
           body{
            background-image:url("p1.jpg");
            background-repeat:no-repeat;
            background-attachment:fixed;
            background-size:100% 100%;
            }
    </style>
     <div class="container">
            <div class="box form-box">
            <header>Login</header>
                <form action="login.inc.php" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="text" name="email"id="email"required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password"id="password"required>
                    </div>

                    <div class=" field ">
                        
                        <input type="submit"class="btn" name="login_button" value="Login"required>
                    </div>
                    <div class="links">
                       Don't have account?  <a href="register.php"> Register Now</a> 
                    </div>
                
                </form>
            </div>
        </div>
</head>
<body>
    
</body>
</html>