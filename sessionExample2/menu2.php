<?php
@session_start();
if($_SESSION["girisYapildi"] != 2){
  require("yetkiliDegilsiniz.php");
  die(); // 9.satırdan önce else olsaydı bunu kullanmazdık.
}

echo "Welcome " . $_SESSION["userName"] . "!";
echo "<h1>Here is Menu2 Page</h1>"; echo "<h1>Here is Menu2 Page</h1>" . "\n";
echo "<a href='logout.php'>Log Out</a>";
?>
