<?php
  @session_start(); // bu iki satırı ekledik.
  if($_SESSION["GirisBasarili"] == 1){
    // Kullanici login olmus

    if($_SESSION["YetkiSeviyesi"] == 1)
    {
      // yetki seviyesi 1 olan kisinin gorecegi ekran
      header("location: menu1.php"); // bi sayfadan diğerine akış böyle yönlendiriliyo
      die();
    }
    if($_SESSION["YetkiSeviyesi"] == 2)
    {
      // yetki seviyesi 2 olan kisinin gorecegi ekran
      header("location: menu2.php");
      die();
    }
  }
  else
  {
    // kullanici login olmamis, login.php sayfasına gitsin
    header("location: login.php"); //login.php sayfasina git
    die(); // stop
  }

  // Buraya asla gelmeyiz
 ?>

<!-- Bizi bekleyen temel ekrandır index.php -->
