<?php
require 'donation_connection.php';

$sql="SELECT D_ID,D_FNAME,D_LNAME,D_EMAIL,D_MOBILE,GREETING,FEEDBACK,FUND_TYPE,D_AMOUNT FROM donation";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";

    
    echo "<th>"."D_ID"."</th>";
    echo "<th>"."First Name"."</th>";
    echo "<th>"."Last Name"."</th>";
    echo "<th>"."Email"."</th>";
    echo "<th>"."Mobile No."."</th>";
    echo "<th>"."Greeting"."</th>";
    echo "<th>"."Feedback"."</th>";
    echo "<th>"."Fund type"."</th>";
    echo "<th>"."Amount"."</th>";
    echo "<th>"."Edit"."</th>";
    echo "<th>"."Remove"."</th>";

    while($row=$result->fetch_assoc())
    {

        echo "<tr>";
        echo "<td>".$row["D_ID"]."</td>";
        echo "<td>".$row["D_FNAME"]."</td>";
        echo "<td>".$row["D_LNAME"]."</td>";
        echo "<td>".$row["D_EMAIL"]."</td>";
        echo "<td>".$row["D_MOBILE"]."</td>";
        echo "<td>".$row["GREETING"]."</td>";
        echo "<td>".$row["FEEDBACK"]."</td>";
        echo "<td>".$row["FUND_TYPE"]."</td>";
        echo "<td>".$row["D_AMOUNT"]."</td>";
        echo "<td>"."<button class='upbt'><a href='donation_index_update.php? id=" . $row['D_ID'] . "'>Update</a></button>"."</td>";
        echo "<td>"."<button class='upbt'><a href='donation_index_delete.php'>Delate</a></button>"."</td>";
        
        echo "</tr>";
    }
    echo "</table>";

}
else
{
    echo "No Results!!";

}


$con->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Donation</title>

    <link rel="stylesheet" type="text/css" href="donation.css" />
</head>
<body>
    
</body>
</html>