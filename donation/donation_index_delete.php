<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Donation</title>
    <link rel="stylesheet" type="text/css" href="donation.css" />
<script src="donation.js"></script>

    </head>
    <body>
        <div class="content">
        <form method="post" action="donation_delete.php" onsubmit="return getapprove()">
        <p><b>You need to confirm Refund process is successfull before you Enter Donor E-mail Address!</b></p>
        
            <lable>Donor E-mail Address:</lable>
            <input type="text" id="email" name="email">
            <br><br>
            <div class="btn">
           
            <button type="submit">Delete</button>
</div>
        </form>
</div>
    </body>
</html>