<!DOCTYPE html>
<html>
<body>
<h2>İki Sayiyi Topla</h2>

<?php if( !isset( $_GET["sayi1"])) { ?>

  <form method="get">

    1.Sayiyi Giriniz: <!-- html kodunun içerisinde direk bir şeyler yazabiliyor muyuz? -->
    <input type="text" name="sayi1" value="" placeholder="Sayi giriniz">
    <br><br>
    2.Sayiyi Giriniz:
    <input type="text" name="sayi2" value="" placeholder="Sayi giriniz">
    <br><br>

    <input type="submit" value="Gönder">

  </form>

  <p>İki sayiyi da girip GÖNDER düğmesine basarak toplam aldırabilirsiniz.</p>

<?php } // Formun Gösterilmesi ?>

<?php
  // $sayi1 = $_GET["sayi1"]; bunu neden yazdık ve sildik??
  if(isset($_GET["sayi1"])) {
    //$A = $_GET["sayi1"];
    //$B = $_GET["sayi2"];
    $sonuc = $A + $B;
    echo "<h1>SONUC: {$_GET["sayi1"]} + $B = $sonuc</h1>"; // $_GET["sayi1"]'i bir değişkene atmadan kullanamaz mıyız???
    echo "<a href='?'>Yeni İslem..</a>";
  }
 ?>

</body>
</html>
