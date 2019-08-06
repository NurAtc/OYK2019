<?php
include("db.php");
?>

<h1>Kayıt Liste</h1>
<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td>KayitNo</td>
    <td>Name</td>
    <td>Surname</td>
    <td>City</td>
    <td>Show</td>
    <td>Update</td>
    <td>Delete</td>
  </tr>
  <?php
    $SQL = "SELECT id, name, surname, city FROM db_deneme_rehber ORDER BY name";
    $rows = mysqli_query($db, $SQL);
    while($row = mysqli_fetch_assoc($rows))
      echo "<tr>
              <td>{$row["id"]}</td>
              <td>{$row["name"]}</td>
              <td>{$row["surname"]}</td>
              <td>{$row["city"]}</td>
              <td><a href='show.php?id={$row['id']}'>Show</a></td>
              <td><a href='update.php?id={$row['id']}'>Güncelle</a></td>
              <td><a href='delete.php?id={$row['id']}'>Delete</a></td>
           </tr>";
  ?>
</table>
