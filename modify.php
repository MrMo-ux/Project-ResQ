<?php
    require_once('config.php');
   
    if(isset($_GET['id']) && isset($_POST['editForm'])){
        $id = $_GET['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $datejoined = $_POST['datejoined'];
        $position = $_POST['position'];

        $sql ="UPDATE `staff_details` SET `username`='$username',
        `password`='$password',`fullname`='$fullname',
        `email`='$email',`phone`='$phone',`datejoined`='$datejoined',
        `position`='position' WHERE id = $id";
         if($conn->query($sql) === TRUE){
            echo "Modified the staff";
        }else{
            echo " something went wrong";
        }
    }else{
        echo "invalid";
    }
?>