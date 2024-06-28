<?php
require 'faq_connection.php';


$sql="SELECT Q_ID,Q_NAME,Q_EMAIL,Q_MESSAGE FROM faq ";

$result=$con->query($sql);

if($result->num_rows>0)
{
    
    echo "<fieldset>";
    echo"<legend>"."<b>"."Querys from visitors"."</b>"."</legend>";
    while($row=$result->fetch_assoc())
    {
       
        echo "<fieldset>";

        echo "Query ID:".$row['Q_ID']."<br>"."<br>";

        echo "Name:".$row['Q_NAME']."<br>"."<br>";

        echo "Email:".$row['Q_EMAIL']."<br>"."<br>";

        echo "Message:".$row['Q_MESSAGE']."<br>"."<br>";

        echo "<button class='upbtn'><a href='faq_index_update.php? id=".$row['Q_ID']."'>Update</a></button>"."<br>";
        echo "<button class='delbtn'><a href='faq_index_delete.php'>Delate</a>"."</button>";

        echo "</fieldset>";
        echo "<br>";
        
        

    }
    echo "</fieldset>";


}

else{
    echo "No Results!!";
}


$con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Querys</title>

    <link rel="stylesheet" type="text/css" href="faq_style.css">
</head>
<body>
    
</body>
</html>