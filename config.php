<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_projectresq_staff";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error){
    die ("Connection failed: $connect_>connect_error");
}

?>

