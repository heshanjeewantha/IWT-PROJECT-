<?php

    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM my_recipes WHERE id=$id";
        $result = $conn->query($sql); 
        $row = $result->fetch_assoc();
        if($row){

            $delete_sql = "DELETE FROM my_recipes where id=$id";
            
            $delete_result = $conn->query($delete_sql);

            if($delete_result){
                header('location: recipe_page.php');
            }else{
                echo 'delete error !';
            }
        }

    }

?>