<?php
    require_once("config.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `staff_details` WHERE id=$id";
        if($conn->query($sql) === TRUE){
            echo "Deleted the data";
        }else{
            echo " something went wrong";
        }
    }else{
        die('id not provided');
    }
?>