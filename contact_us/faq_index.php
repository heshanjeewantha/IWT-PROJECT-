<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" type="text/css" href="faq_style.css">
    <script src="faq.js"></script>
</head>
<body>
<div class="navMain">
        <div class="navigation">
            <div class="navlogo">
                <img id="cLogo" src="logo.png" alt="">
                <h1>FLAVOR FORGE</h1>
                <div class="proLogOut">
                    <img id="pLogo" src="img/profile.png" alt="">
                    <a href="#">Log out</a>
                </div>
            </div>
            <div class="navBar">
                <ul>
                <li><a href="../home.html">Home</a></li>
                        <li><a href="donation/donation_index.php">Donation</a></li>
                        <li><a href="../contact_us/faq_index.php">Contact Us</a></li>
                        <li><a href="../feedback/index.php">Add Feedback</a></li>
                        <li><a href="../login_new/pro.php">My Profile</a></li>
                        <li><a href="#">popular Section</a></li>
                        <li><a href="../favorite/data/view_data.php">Favorite</a></li>
                        <li><a href="../Add_Recipe_my/Add Recipe.php">Add Recipe</a></li>
                </ul>
            </div>
        </div>
    </div>

<div class="content">
    <fieldset>
        <legend><b>Any Problem?</b></legend>
        <div class="form">
        <form method="POST" action="faq_insert.php" onsubmit="return faq()">

            <lable for="name">Enter your Name:</lable>
            <br>
            <input type="text" id="name" name="name" placeholder="Enter your name here" autocomplete="off" required>
            <br><br>

            <lable for="email">Enter your personal Email:<span>*</span></lable>
            <br>
            <input type="text" id="email" name="email" placeholder="someone@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}"  autocomplete="off" required>
            <br><br>

            <lable for="message">Enter your Message:</lable>
            <br>
            <div class="message">
                <textarea id="message" name="message" placeholder="What do you want to tell Us :)" autocomplete="off" cols="50" rows="4" required></textarea>
                    <br><br>
            </div>

            <div class="submit_btn">
                <button type="submit">Submit</button>
            </div>

            <br>

            <div class="view_btn">
            <button><a href="faq_read.php">View FAQs</a></button>
        </div>

        </form>
</div>

        
</fieldset>

</div>
    
</body>
</html>