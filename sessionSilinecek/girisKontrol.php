<?php
@session_start();
if($_SESSION["girisBasarili"] != 1) die("Yetkili degilsiniz..<a href='index.php'>Giris Yap</a>");
?>
<a href='sorular.php'>Geri Dön</a> -
<a href="oturumuKapat.php">Oturumu Kapat</a>
