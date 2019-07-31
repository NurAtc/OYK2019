<?php

$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "bilgiler";


// Veritabanı bağlantısının oluşturulması
$db = mysqli_connect($servername, $username, $password, $dbname);
// Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }
//echo "Bağlantı tamam!";

/*  Tablosuz listeleme
  $SQL   = "SELECT id, sayi1, sayi2 FROM sayilar ORDER BY id, sayi1, sayi2";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) { // Kayıt adedince döner
      echo "{$row["sayi1"]}, {$row["sayi2"]}\n";
  }
*/
?>

<table border=1 cellpadding=5 cellspacing=0>
  <tr>
    <td>1.Sayi</td>
    <td>2.Sayi</td>
  </tr>

  <?php
  $SQL   = "SELECT id, sayi1, sayi2 FROM sayilar ORDER BY id DESC";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) { // Kayıt adedince döner
      echo sprintf("
        <tr>
          <td>%s</td>
          <td>%s</td>
        </tr>",
        $row["sayi1"], $row["sayi2"]   );
  }
  ?>
</table>
