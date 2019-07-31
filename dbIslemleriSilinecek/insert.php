<?php
include("db.php");
if(isset($_POST["adi"])){
  $SQL = "INSERT INTO db_deneme_rehber SET adi='{$_POST["adi"]}', soyadi='{$_POST["soyadi"]}', sehir='{$_POST["sehir"]}'";
  $rows = mysqli_query($db, $SQL);
  echo "<h4>Kayit eklendi..</h4>";
}
  //$SQL = "INSERT INTO db_deneme_rehber SET adi='{$_POST["adi"]}', soyadi='{$_POST["soyadi"]}', sehir='{$_POST["sehir"]}'";
?>

<h1>Kayıt Ekleme</h1>
<form method="post">
  Adı:<input type="text" name="adi">
  <br /><br />
  Soyadı:<input type="text" name="soyadi">
  <br /><br />
  Şehir:<input type="text" name="sehir">
  <br /><br />
  <input type="submit" name="" value="Kayıt Ekle (insert)">
</form>
