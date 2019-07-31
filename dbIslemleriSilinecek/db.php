<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "bilgiler";

$db = mysqli_connect($servername, $username, $password, $dbname);
if(!$db) die("Hata oluştu.." . mysqli_connect_error());
?>
