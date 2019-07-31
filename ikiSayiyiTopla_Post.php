<!DOCTYPE html>
<html>
<body>
<h2>İki Sayiyi Topla POST Örneği</h2>


<?php if( !isset( $_POST["sayi1"])) { ?>

  <form method="post">

    1.Sayiyi Giriniz:
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
  if(isset($_POST["sayi1"])) {
    $A = $_POST["sayi1"];
    $B = $_POST["sayi2"];
    echo "<h1>SONUC: {$_POST["sayi1"]} + {$_POST["sayi2"]}" . $_POST["sayi1"]+$_POST["sayi2"] . " = </h1>";
    echo "<a href='?'>Yeni İslem..</a>"; // Buradaki '?' default olarak gelen değer mi?
  }
 ?>

</body>
</html>
