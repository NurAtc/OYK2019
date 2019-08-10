<?php
@session_start();
if($_SESSION["girisYapildi"] != 1){
  require("yetkiliDegilsiniz.php");
  die();
}

echo "Welcome " . $_SESSION["userName"] . "!";
echo "<h1>Here is Menu1 Page</h1>"; echo "<h1>Here is Menu1 Page</h1>";
echo "<a href='logout.php'>Log Out</a>";
?>
