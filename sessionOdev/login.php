<?php
  @session_start();
  if($_SESSION["GirisBasarili"] == 1)
  {
    // Kullanici zaten login olmus. Bu sayfada isi yok.
    // index.php sayfasina yonlendirelim.
    header("location: index.php");
    die();
  } // Bu if blogunu neden yazdik???

  // session ile alakasi yok
  if(isset($_POST["user"])) // Giris formu doldurulmus ve gonderilmis demek
  {
    if($_POST["user"] == "ahmet" and $_POST["pass"] == "123")
    {
      // ahmet giris yapmistir
      $_SESSION["GirisBasarili"] = 1; // login olmak ayrı bi kavram
      $_SESSION["YetkiSeviyesi"] = 1; // yetki seviyesi ayrı bi kavram
                                      // diye düşündüğümüz için böyle yazdık ama
                                      // tek bi değişkende de tutulabilir.
      $_SESSION["KullaniciAdi"] = "Ahmet Yildiz";
      // index sayfaısna program akısını yonlendirelim
      header("location: index.php");
      die();
    }
    if($_POST["user"] == "mehmet" and $_POST["pass"] == "789")
    {
      // mehmet giris yapmistir
      $_SESSION["GirisBasarili"] = 1;
      $_SESSION["YetkiSeviyesi"] = 2;
      $_SESSION["KullaniciAdi"] = "Mehmet Yilmaz";
      // index sayfaısna program akısını yonlendirelim
      header("location: index.php");
      die();
    }
    // Buraya geliyosa giris bilgileri yanlistir.
    $hataMesaji = "Kullanici adi veya parolasi hatali!";
  }
?>


<h1>Giris Sayfasi</h1> <!-- login sayfaları her zaman post, öteki türlü password adres satirinda görünür -- >
<form method="post">
  User Name: <input type="text" name="user" value="">
  <br /><br />
  Password: <input type="password" name="pass" value="">
  <br /><br />
  <input type="submit" value="GİRİŞ YAP">
</form>

<?php if(isset($hataMesaji)) echo "<h2 style='color:pink'>$hataMesaji</h2>";
// Böyle bir degiskenin varligi hata mesajı oldugunu gösterir.
?>
