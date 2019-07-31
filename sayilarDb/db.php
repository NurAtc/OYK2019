<?php

$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "bilgiler";

// Veritabanı bağlantısının oluşturulması
// Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }
?>
