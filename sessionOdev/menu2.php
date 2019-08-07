<?php
@session_start();
if($_SESSION["GirisBasarili"] != 1)
{
  require("yetkili.degilsiniz.php");
  die();
}
if($_SESSION["YetkiSeviyesi"] != 2)
{
  require("yetkili.degilsiniz.php");
  die();
}
 ?>

<p>Hosgeldin <?php $_POST["user"] // olmaz çünkü o post değişkeni login ekranında kaldi gitti.
                                  // session kullanmamız lazım
?></p>
<h1>Burasi Menu2 ekranidir.</h1>

<a href = "oturumKapat.php">Oturumu Kapat</a>
