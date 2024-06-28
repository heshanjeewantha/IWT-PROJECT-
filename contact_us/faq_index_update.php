<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query</title>
    <link rel="stylesheet" type="text/css" href="faq_style.css">
    <script src="faq.js"></script>


</head>
<?php

require 'faq_connection.php';



// $sql="SELECT * FROM faq ";

// $result=mysqli_query($con,$sql);

// while($row=mysqli_fetch_assoc($result))

if(isset($_GET['id']))
{

    $ID = $_GET['id'];
    $sql="SELECT *FROM faq where Q_ID = $ID ";

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    if($row){
?>


<body>
<div class="content_up">
        <fieldset>

            <legend><b>You can update only your Message!</b></legend>
            
            <form method="POST" action="faq_update.php" onsubmit="return update()" >

            <lable for="Q_id">Q_ID:</lable>
            <br>
            <input type="text" value="<?php echo $row["Q_ID"]?>" id="q_id" name="q_id" readonly>
            <br><br>

            <lable for ="name">Enter your Name:</lable>
            <br>
            <input type="text" value="<?php echo $row["Q_NAME"]?>" id="name" name="name" readonly>
            <br><br>

            <lable for="email">Enter your personal Email:</lable>
            <br>
            <input type="text" value="<?php echo $row["Q_EMAIL"]?>" id="email" name="email" readonly>
            <br><br>

            <lable for="message">Enter your Message:</lable>
            <br>
            <div class="message">
                <textarea id="message" name="message"><?php echo $row["Q_MESSAGE"]?></textarea>
                    <br><br>
            </div>

            <div class="submit_btn">
                <button type="submit">Update</button>
            </div>

  

</form>
</fieldset>

<?php

}
}


?>
</body>
</html>