<?php
@session_start();
if($_SESSION["girisYapildi"] == 1 || $_SESSION["girisYapildi"] == 2){
  header("location: index.php");
}
echo "<h1>Login Page</h1>
      <form method='post'>
        UserName: <input type='text' name='userName' /><br />
        Password: <input type='password' name='password' /><br />
        <input type='submit' value='Log In' />
      </form>";

if(isset($_POST["userName"])){
  if($_POST["userName"] == "ahmet" && $_POST["password"] == "123"){
    $_SESSION["girisYapildi"] = 1; $_SESSION["userName"] = "Ahmet"; echo $_SESSION["userName"] . " giris yapti.";
    header("location: index.php");
  }
  if($_POST["userName"] == "mehmet" && $_POST["password"] == "789"){
    $_SESSION["girisYapildi"] = 2; $_SESSION["userName"] = "Mehmet"; echo $_SESSION["userName"] . " giris yapti.";
    header("location: index.php");
  }

  echo "<h1 style='color: red'>Kullanıcı adi veya parolasi hatali!</h1>";
}
?>
