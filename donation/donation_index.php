<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Donation</title>

        
        <link rel="stylesheet" type="text/css" href="donation.css" >
    <script src="donation.js"></script>

    </head>
    <body>
    <div class="navMain">
        <div class="navigation">
            <div class="navlogo">
                <img id="cLogo" src="../img/logo.png" alt="">
                <h1>FLAVOR FORGE</h1>
                <div class="proLogOut">
                    <img id="pLogo" src="../img/profile.png" alt="">
                    <a href="login_page_my/logout.php">Log out</a>
                </div>
            </div>
            <div class="navBar">
                <ul>
                    <li><a href="../home.html">Home</a></li>
                    <li><a href="donation_index.php">Donation</a></li>
                    <li><a href="../contact_us/faq_index.php">Contact Us</a></li>
                    <li><a href="../feedback/index.php">Add Feedback</a></li>
                    <li><a href="../login_page_my/profile.php">My Profile</a></li>
                    <li><a href="../login_page_my/my_profile.php">popular Section</a></li>
                    <li><a href="../favorite/data/view_data.php">Favorite</a></li>
                    <li><a href="../Add_Recipe_my/Add Recipe.php">Add Recipe</a></li>
                </ul>
            </div>
        </div>
    </div>
        <div class="content">
            <fieldset>

                    <legend><b>Donation Info</b></legend>

                    <form method="post" action="donation_insert.php" onsubmit="return form()">

                    <label for="firstName">First Name:<span>*</span></label>
                    <br>
                    <input type="text" id="firstName" name="firstName" placeholder="Enter your First name" autocomplete="off" required>
                    <br><br>
                    
                    <label for="lastName">Last Name:<span>*</span></label>
                    <br>
                    <input type="text" id="lastName" name="lastName" placeholder="Enter your First name" autocomplete="off" required>
                    <br><br>

                    <label for="email">Email:<span>*</span></label>
                    <br>
                    <input type="email" id="email" name="email" placeholder="someone@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" autocomplete="off" required>
                    <br><br>

                    <label for="mobileNumber">Mobile No:<span>*</span></label>
                    <br>
                    <input type="tel" id="mobileNumber" name="mobileNumber" placeholder="xxxxxxxxxx" autocomplete="off" required >
                    <br><br>

                
                    <lable for="greeting">Greeting:</lable>
                    <div class="greeting">
                    <textarea id="greeting" name="greeting" placeholder="Address Us :)" autocomplete="off" cols="50" rows="4" required></textarea>
                    
                </div>


                
                    <lable  for="feedback">Feedback:</lable><br>
                    <div class="feedback">
                    <textarea id="feedback" name="feedback" placeholder="Tell us about your experience" cols="50" rows="4" autocomplete="off" required></textarea>
                    <br><br>
                </div>

                    
                    <label for="fund">Online Fund Tranfer:</label>
                    <br>
                    <lable><b>Select your fund transfer option</b></lable>
                    <br>
                    <select id="fund" name="fund">
                        <option value="VISA">VISA</option>
                        <option value="masterCard">Master Card</option>
                    </select>
        <br><br>
                    <lable>Enter your card details:</lable>
                    <br>
                    <input type="text" id="cardName" name="cardName" placeholder="Name of the card holder" autocomplete="off" required>
                    <br><br>

                    <lable>Enter your card Number:</lable>
                    <br>
                    <input type="text" id="cardNumber" name="cardNumber" placeholder="XXXX-XXXX-XXXX-XXXX" autocomplete="off" required pattern ="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
                    <br>
                    <lable><b>Format:<span>*</span></b>XXXX-XXXX-XXXX-XXXX</lable>
                    <br><br>
        <div class="card">
                 <div class="exp">
                    <lable>Exp.Month:</lable><br>
                    <input type="text" class="fund" id="valid" name="valid" placeholder="MM" autocomplete="off"  required>
                     <br> 

                    <lable>Exp.year</lable><br>
                    <input type="text" class="fund" id="valid" name="valid" placeholder="YY" autocomplete="off"  required>
                    <br>
                </div> 


               <div class="cvv">
                    <lable>CVV:</lable><br>
                    <input type="text" class="fund" id="cvv" name="cvv" placeholder="CVV" autocomplete="off" required pattern="[0-9]{3}" required>
                    <br>
                    
                </div>
                <lable><span>*This code is a three digit number printed on the back of front of the credit cards.</span></lable>
                    <br>
        </div>

        <label for="amount">Amount of Donation:</label>
        <br>
        <input type="text" id="amount" name="amount" placeholder="Enter you prefered amount in ($)" autocomplete="off" required>
        <br><br>

        <div class="btn">
        <button type="submit">Submit</button>
        </div>



        </form>
        <div class="btn">
        <a href="donation_read.php"><button>View Donations</button></a>
        </div>



        </fieldset>
        </div>
        <footer>
            <div class="container">
                <div class="footer">
                    <div class="footer-content1">
                        <div class="log">
                            <img src="image/logo.png" alt="">
                            <h3>Follow</h3>
                            <a href=""><i class="fa-brands fa-facebook"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href=""><i class="fa-brands fa-square-twitter"></i></a>
                        </div>
                    </div>
                    <div class="footer-content2">
                        <div class="details">
                            <ul>
                                <a href=""><li>Recipe</li></a>
                                <a href=""><li>About Us</li></a>
                                <a href=""><li>Donation</li></a>
                                <a href=""><li>Contact Us</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-content3">
                        <div class="PTE">
                            <ul>
                                <a href=""><li>Privacy and Policy</li></a>
                                <a href=""><li>Terms of Use</li></a>
                                <a href=""><li>Editorial Guidelines</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
            
    </body>
</html>