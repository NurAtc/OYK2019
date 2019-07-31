<?php/*
  // if($girisBasarili != 1 ) die("Yetkili degilsiniz");
  @session_start(); // bu iki satırı ekledik.
  if($_SESSION["Giris Basarili"] != 1) die("Yetkili degilsiniz!"); // bu iki satırı ekledik.
  // Bu kod bloğunu buraya da ekledik. Değilse adres satirindan direk adlarini yazıp erişebilirdik.
  // die, düz echo gibi değil. die'dan sonra programa devam etmiyor.*/
 ?>

<?php require("girisKontrol.php"); // Bu kod bloğunu buraya da ekledik.
// Değilse adres satirindan direk adlarini yazıp erişebilirdik.?>

<h1>Bitirme Sinavi Sorulari</h1>
<ul>
  <li><a href="phpSorulari.php">PHP Sinifi Sorulari</a></li>
  <li><a href="cssSorulari.php">CSS Sinifi Sorulari</a></li>
  <li><a href="jsSorulari.php">JavaScript Sinifi Sorulari</a></li>
</ul>
