<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "databaseName";

$db = mysqli_connect($servername, $username, $password, $dbname);
if(!$db) die("Hata oluştu.." . mysqli_connect_error());

mysqli_query($db, "set names 'utf8'");
?>
