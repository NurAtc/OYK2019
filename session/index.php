<?php
@session_start(); // session ile ilgili bir şey yapacağımız zaman bunu kullanmak zorundayız.s
?>

<h1>Egitmen Girisi</h1>
<form method = "post">
  User Name: <input type="text" name="user" value=""/>
  <br /><br />
  Password: <input type="password" name="pass" value=""/>
  <br /><br />
  <input type="submit" name="" value="LogIn" />
</form>

<?php /*
if(isset($_POST["user"])){
  if($_POST["user"] == "linux" and $_POST["pass"] == "sudo")
    include("sorular.php"); // bir kod bloğuna başka yerden bir şey koymaya yarıyor
  else {                    // doğru parolayı yazan burayı görüyor
    echo "Giris Hatali!";
  }
}*/
?>

<?php

if(isset($_POST["user"]))
{
  if($_POST["user"] == "linux" && $_POST["pass"] == "sudo")
  {
    // $girisBasarili = 1; bunu iptal ettik.
    $_SESSION["GirisBasarili"] = 1;
    // giris basarili ise sorular.php sayfasina gitsin.
    echo "<a href='sorular.php'>Sorular sayfasindan devam edebilirsiniz..</a>";
  }
  else {
    $_SESSION["GirisBasarili"] = 0;
    echo "Giris Hatali!";
  }
}
// Böylece sorular.php sayfasını korumus olduk.
// Her klasörün default'u index.php'dir. Sadece localhost'un değil.
// Dolayısıyla session'un default'u da index.php'dir.
?>
