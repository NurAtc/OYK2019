<?php


// print_r -> gelen bilgileri toplu olarak yazdırır.

$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "bilgiler";

#### ADIM 1
#### ADIM 1
#### ADIM 1
// Veritabanı bağlantısının oluşturulması
$db = mysqli_connect($servername, $username, $password, $dbname);
// Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }
//echo "Bağlantı tamam!";


$SEHIR = $_GET["sehir"];
$SQL   = "SELECT * FROM yemek_menusu ORDER BY yemek_turu, yemek_adi";
$rows  = mysqli_query($db, $SQL);


$TabloBasi = "
<table border=1 cellspacing=0 cellpadding=5>
<tr>
  <td>Kayıt No</td>
  <td>Yemek Türü</td>
  <td>Yemek Adi</td>
  <td>Yemek Fiyat</td>
</tr>
";
$TabloSonu = "</table>";

echo "<h1>Yemek Menüsü Güncelleme</h1>";
echo $TabloBasi;

      while($row = mysqli_fetch_assoc($rows)) {

        extract($row); // ilişkilendirilmiş dizinin elemanları için değişken oluşturur.7
        // bundan böyle $_row["yemek_adi"] yazmak yerine $yemek_adi yazılabilir.

          echo sprintf("
                <tr>
                  <td>%s</td>
                  <td>%s</td>
                  <td>%s</td>
                  <td>%s</td>
                </tr>",
                $id
                $yemek_turu
                $yemek_adi
                $yemek_fiyati
              );

      } // while sonu

      echo $TabloSonu;

} // Şehir seçimi yapılmış


mysqli_close($db);

?>
