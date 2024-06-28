<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query</title>

    <link rel="stylesheet" type="text/css" href="faq_style.css">
    <script src="faq.js"></script>
</head>
<body>

<div class="content">
        <form method="post" action="faq_delete.php" onsubmit="return getapprove()">
        <p><b>You need to Enter E-mail Address!</b></p>
        
            <lable>E-mail Address:</lable>
            <br>
            <input type="text" id="email" name="email" placeholder="someone@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" autocomplete="off" required>
            <br><br>
            <button type="submit" >Delete</button>
            <!-- <button type="submit">Update</button> -->
        </form>
</div>
    
</body>
</html>