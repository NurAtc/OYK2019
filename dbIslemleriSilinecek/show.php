<?php
include("db.php");
$SQL = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber WHERE id={$_GET["id"]}";
$rows = mysqli_query($db, $SQL);
$row = mysqli_fetch_assoc($rows);
echo "<h1>{$row["adi"]} {$row["soyadi"]}</h1>Adi: {$row["adi"]}<br />Soyadi: {$row["soyadi"]}<br />Sehir: {$row["sehir"]}";
?>
