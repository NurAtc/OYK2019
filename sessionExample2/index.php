<?php
@session_start();
  if($_SESSION["girisYapildi"] == 1){
    header("location: menu1.php"); die();
  }
  if($_SESSION["girisYapildi"] == 2){
    header("location: menu2.php"); die();
  }
  header("location: login.php");
?>
