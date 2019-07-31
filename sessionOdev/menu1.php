<?php
@session_start();
if($_SESSION["GirisBasarili"] != 1)
{
  require("yetkili.degilsiniz.php");
  die();
}
if($_SESSION["YetkiSeviyesi"] != 1)
{
  require("yetkili.degilsiniz.php");
  die();
}

 ?>

<p>Hosgeldin <?php $_SESSION["KullaniciAdi"] ?></p>
<h1>Burasi Menu1 ekranidir.</h1>

<a href = "oturumKapat.php">Oturumu Kapat</a>
