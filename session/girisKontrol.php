<?php
  // if($girisBasarili != 1 ) die("Yetkili degilsiniz"); bunu iptal ettik.
  @session_start(); // bu iki satırı ekledik.
  if($_SESSION["GirisBasarili"] != 1) die("Yetkili degilsiniz! <a href='index.php'>Giris Yap</a>"); // bu iki satırı ekledik.
  // die, düz echo gibi değil. die'dan sonra programa devam etmiyor.
?>

<a href="sorular.php">Geri Don</a> -
<a href="oturumuKapat.php">Oturumu Kapat</a>
