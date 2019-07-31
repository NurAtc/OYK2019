<h1>Kullanicilar Sayfasi</h1>
<form method = "post">
  Ad: <input type="text" name="ad" value=""/><br /><br />
  Soyad: <input type="text" name="soyad" value=""/><br /><br />
  Parola: <input type="password" name="pass" value=""/><br /><br />
  <select name="tur">
    <option value="">Seciniz</option>
    <option value="Musteri">M</option>
    <option value="Esnaf">E</option>
  </select><br /><br />
  <input type="submit" name="" value="Kaydet" />
</form>

<?php

if(isset($_POST["ad"]))
{
  // if($_POST["tur"]) == "") echo "tur secimi yapilmamis"; die();  // 1.bunu degistirdik
  $servername = "localhost";
  $username   = "root";
  $password   = "root";
  $dbname     = "bilgiler";

  // Veritabanı bağlantısının oluşturulması
  // Varsa, bağlantı hatasının ekrana yazdırılarak programın sonlandırılması
  $db = mysqli_connect($servername, $username, $password, $dbname);
  if (!$db) { die("Hata oluştu: " . mysqli_connect_error()); }


  // SQL sorgusu olusturduk
  $SQL = "INSERT INTO kullanicilar SET ad = '{$_POST["ad"]}', soyad = '{$_POST["soyad"]}', parola = '{$_POST["pass"]}', tur = '{$_POST["tur"]}'";
  // Adı SQL olmak zorunda degil. Misal $ekleKomutu
  echo $SQL;
  // SQL cümlesini calistirdigimiz yer
  $rows  = mysqli_query($db, $SQL);
}
?>
