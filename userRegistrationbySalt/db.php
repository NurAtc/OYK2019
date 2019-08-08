<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bilgiler";

$db = mysqli_connect($servername, $username, $password, $dbname);
if(!$db) die("Error!" . mysqli_connect_error()); 
?>
