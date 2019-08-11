<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

$db = mysqli_connect($servername, $username, $password, $dbname);
if(!$db) die("Error!" . mysqli_connect_error()); 
?>
