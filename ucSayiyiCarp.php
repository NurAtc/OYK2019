<!DOCTYPE html>
<html>
<body>
<h2>Uc Sayiyi Carpma</h2>

<?php if(!isset($_GET["sayi1"])) { ?>

<form method="get">

  1.Sayiyi Giriniz:
  <input type="text" placeholder="1.sayiyi giriniz:" name="sayi1"/>
  <br />
  2.Sayiyi Giriniz:
  <input type="text" placeholder="2.sayiyi giriniz:" name="sayi2"/>
  <br />
  3.Sayiyi Giriniz:
  <input type="text" placeholder="3.sayiyi giriniz:" name="sayi3"/>
  <br />
  <input type="submit" value="HESAPLA" />
</form>

<?php } ?>

<?php

if(isset($_GET["sayi1"]))
{
  $a = $_GET["sayi1"];
  $b = $_GET["sayi2"];
  $c = $_GET["sayi3"];
  $sum = $a*$b*$c;
  echo "<h3>Sonuc: $a*$b*$c= $sum</h3>";
}

?>

</body>
</html>
