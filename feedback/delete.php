<?php

    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM feedback WHERE id=$id";
        $result = $conn->query($sql);  //store result in mysql code for using $conn ($conn ek use krl mysql eken gnn result ek $result eke store kri)
        $row = $result->fetch_assoc();
        if($row){
            $delete_sql = "DELETE FROM feedback where id=$id";
            $delete_result = $conn->query($delete_sql);

            if($delete_result){
                header('location: index.php');
            }else{
                echo 'delete error !';
            }
        }

    }

?>