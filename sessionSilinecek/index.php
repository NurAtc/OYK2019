<?php
@session_start();
?>

<h1>Egitmen Girisi</h1>
<form method="post">
  User Name: <input type="text" name="username" /><br />
  Password: <input type="password" name="password" /><br />
  <input type="submit" value="Log In" />
</form>

<?php
if(isset($_POST["username"]))
{
  if($_POST["username"] == "linux" && $_POST["password"] == "sudo")
  {
    $_SESSION["girisBasarili"] = 1; echo "<a href='sorular.php'>Sorular sayfasından devam edebilirsiniz..</a>";
  }
  else {
    $_SESSION["girisBasarili"] = 0; echo "Giris Hatali!";
  }
}
?>
