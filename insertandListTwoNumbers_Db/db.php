<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "databasename";

$db = mysqli_connect($servername, $username, $password, $dbname);
if(!$db) die("Hata olustu!" . mysqli_connect_error());

?>
