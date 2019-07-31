<?php
include("db.php");
$SQL = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber WHERE id={$_GET["id"]}";
$rows = mysqli_query($db, $SQL);
$row = mysqli_fetch_assoc($rows);
echo "<h1>{$row["adi"]} {$row["soyadi"]}</h1><h3>Kayit Guncelleme</h3>ID: {$row["id"]}<br />";
echo "Adi:";
?>

<input type="text" name="adi" value="<?php echo $row["adi"];?>">  <!-- neden echo var. -->
