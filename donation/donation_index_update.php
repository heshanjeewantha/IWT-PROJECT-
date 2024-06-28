<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Donation</title>

    <link rel="stylesheet" type="text/css" href="donation.css" />
<script src="donation.js"></script>

    </head>

<?php

require 'donation_connection.php';
    if(isset($_GET['id'])){

    $ID = $_GET['id'];
    $sql="SELECT *FROM donation where D_ID = $ID ";

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    if($row){
    
?>


    <body>
    <div class="content">
        <fieldset>

            <legend><b>You can update only Greeting &Feedback!</b></legend>

            <form method="POST" action="donation_update.php" onsubmit="return update()" >

            <lable for="D_id">D_ID:</lable>
            <br>
            <input type="text" value="<?php echo $row["D_ID"]?>" id="d_id" name="d_id" readonly>
            <br><br>
        

            <label for="email">Email:<span>*</span></label>
            <br>
            <input type="email" value="<?php echo $row["D_EMAIL"]?>" id="email" name="email" readonly>
            <br><br>

            <label for="firstName">First Name:<span>*</span></label>
            <br>
            <input type="text" value="<?php echo $row["D_FNAME"]?>" id="firstName" name="firstName" readonly>
            <br><br>
            
            <label for="lastName">Last Name:<span>*</span></label>
            <br>
            <input type="text" value="<?php echo $row["D_LNAME"]?>" id="lastName" name="lastName" readonly>
            <br><br>

            <label for="mobileNumber">Mobile Number:<span>*</span></label>
            <br>
            <input type="tel" value="<?php echo $row["D_MOBILE"]?>" id="mobileNumber" name="mobileNumber" readonly hidden >
            <br><br>

        
            <lable for="greeting">Greeting:</lable><br>
            <div class="greeting">
            <textarea  id="greeting" name="greeting" cols="50" rows="4"><?php echo $row["GREETING"]?></textarea>
            <br><br>
        </div>

        
            <lable  for="feedback">Feedback:</lable><br>
            <div class="feedback">
            <textarea  id="feedback" name="feedback" cols="50" rows="4"><?php echo $row["FEEDBACK"]?></textarea>
            <br><br>
        </div>

<div class="btn">
<button type="submit">Update</button>
</div>

</form>
</div>

</fieldset>
<?php
}}
echo 'Data did not sent by database';
    ?>

        
            
    </body>
</html>