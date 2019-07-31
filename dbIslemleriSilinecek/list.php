<?php
include("db.php");
?>

<h1>Kayit Listele</h1>
<table border="1" cellpadding="5" cellspacing="0">
<tr>
  <td>KayitNo</td>
  <td>Adi</td>
  <td>Soyadi</td>
  <td>Sehir</td>
  <td>Goster</td>
  <td>Guncelle</td>
  <td>Sil</td>
</tr>
<?php
$SQL = "SELECT id, adi, soyadi, sehir FROM db_deneme_rehber ORDER BY adi, soyadi, sehir";
$rows = mysqli_query($db, $SQL);
while($row = mysqli_fetch_assoc($rows)) // kayit adenince doner
  echo "
  <tr>
    <td>{$row["id"]}</td>
    <td>{$row["adi"]}</td>
    <td>{$row["soyadi"]}</td>
    <td>{$row["sehir"]}</td>
    <td><a href='show.php?id={$row["id"]}'>Show</a></td>
    <td><a href='update.php?id={$row["id"]}'>Update</a></td>
    <td><a href='delete.php?id={$row["id"]}'>Delete</a></td>
  </tr>";
?>
</table>
