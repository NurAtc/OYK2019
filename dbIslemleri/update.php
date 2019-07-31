<?php
  include("db.php");

  if(isset($_POST["adi"]))
  {
    $SQL = sprintf("UPDATE db_deneme_rehber SET adi='%s', soyadi='%s', sehir='%s' WHERE id='%s'", $_POST["adi"], $_POST["soyadi"], $_POST["sehir"], $_POST["id"]);
    $rows = mysqli_query($db, $SQL);
    echo "Kayit güncellendi..";
  }

  // Buradaki işlemleri, kullanıcının bilgileri textboxta hazır gelsin diye yapıyoruz.
  
  // Adres satırından gelen ID bilgisini al.
  $ID    = $_GET["id"];

  // Veri tabanından o ID'ye karşılık gelen satırı çek
  $SQL   = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber WHERE id=$ID";

  // Sorgumuzu MySQL'e Gönder
  $rows  = mysqli_query($db, $SQL);

  // Gelen TEK satırlık cevabı row adlı değişkene yerleştir
  $row    = mysqli_fetch_assoc($rows);

  $id     = $row["id"];
  $adi    = $row["adi"];
  $soyadi = $row["soyadi"];
  $sehir  = $row["sehir"];

?>
<h1><?php echo $adi . " " . $soyadi;?></h1>
<h3>Kayıt Güncelleme</h3>

<form method="post">
  ID: <?php echo $id;?>
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <br /><br />
  Adı:<input type="text" name="adi" value="<?php echo $adi;?>">
  <br /><br />
  Soyadı:<input type="text" name="soyadi" value="<?php echo $soyadi;?>">
  <br /><br />
  Şehir:<input type="text" name="sehir" value="<?php echo $sehir;?>">
  <br /><br />
  <input type="submit" name="" value="Güncelle (update)">
</form>
