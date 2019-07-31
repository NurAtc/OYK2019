<h1>Sayilar Sayfasi</h1>
<form method = "post">
  Sayi1: <input type="text" name="sayi1" value=""/>
  <br /><br />
  Sayi2: <input type="text" name="sayi2" value=""/>
  <br /><br />
  <input type="submit" name="" value="GONDER" />
</form>

<?php

if(isset($_POST["sayi1"]))
{
  $servername = "localhost";
  $username   = "root";
  $password   = "root";
  $dbname     = "bilgiler";

  // Veritabanı bağlantısının oluşturulması
  // Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
  $db = mysqli_connect($servername, $username, $password, $dbname);
  if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }
  //echo "Bağlantı tamam!";

  // SQL sorgusu olusturduk
  $SQL   = "INSERT INTO sayilar SET sayi1 = '{$_POST["sayi1"]}', sayi2 = '{$_POST["sayi2"]}'";
  // Adı SQL olmak zorunda degil. Misal $ekleKomutu
  $rows  = mysqli_query($db, $SQL);

}
?>
