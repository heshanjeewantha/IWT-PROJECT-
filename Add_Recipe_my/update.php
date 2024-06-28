

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Update Recipe Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="update_recipe.css">
    <title>Document</title>
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
                    <li><a href="recipeMnagement/home.html">Home</a></li>
                    <li><a href="#">Donation</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Add Feedback</a></li>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">popular Section</a></li>
                    <li><a href="#">Trending Recipe</a></li>
                </ul>
            </div>
        </div>
    </div>



    <?php

    require 'config.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM my_recipes WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row) {

            echo    '<div class="add-recipe">
                            <h1>update Recipe</h1>
                            
                            <form action="update.inch.php" method="post"  enctype="multipart/form-data" onsubmit="return responseFunction()">

                                

                                <div class="inputs">
                                    <p>Recipe Id</p>  
                                    <input id="id" type="text" name="item_id" value="' . $row['id'] . '" readonly>
                                    <p>Owner Name</p>
                                    <input type="text" name="fullname" value="' . $row['user_name'] . '" placeholder="Name">
                                    <p>Date</p>
                                    <input type="date" name="r-date" value="' . $row['r_date'] . '" placeholder="Today">
                                    <p>Recipe Title</p>
                                    <input type="text" name="r-title" value="' . $row['r_title'] . '" placeholder="Title">
                                    <p>Recipe Preparation Time(minutes)</p>
                                    <input type="number" name="r-time" value="' . $row['r_time'] . '" placeholder="Time">
                                </div>
                                <p>Description</p>
                                <textarea name="comment"  placeholder="Type here">  ' . $row['description'] . ' </textarea>';
                         
                              
                                echo '<input type="file" id="item_image" name="item_image" accept="image/*">';
                                echo '<button type="submit">Update Item</button>';
                                echo '</form>
                            </form>

                        </div>';
        }
    }

    ?>
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



<script>
    // var uploadpic = document.getElementById("up-pic");
    // var inputfile = document.getElementById("input-file");

    // inputfile.onchange = function() {
    //     uploadpic.src = URL.createObjectURL(inputfile.files[0]);
    //     alert("Image added successfully!");
    // }

    function responseFunction() 
    {
       if (confirm("Do You Want To Update Recipe?"))
       {
        return true;
       }else
       {
        return false;

       }

    }

    // //     function myFunction() {
    // // //   let text;
    // // //   if (confirm("Press a button!") == true) {
    // // //     text = "You pressed OK!";
    // // //   } else {
    // // //     text = "You canceled!";
    // // //   }
    // // //   document.getElementById("demo").innerHTML = text;
    // }
</script>