<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td>No1</td>
    <td>No2</td>
  </tr>

<?php
require("db.php");
$SQL = "SELECT sayi1, sayi2 FROM sayilar ORDER BY id DESC";
$rows = mysqli_query($db, $SQL);
while ($row = mysqli_fetch_assoc($rows)) {
  echo "<tr>
          <td>{$row["sayi1"]}</td>
          <td>{$row["sayi2"]}</td>
        </tr>"; } // end of while
?>
</table>
