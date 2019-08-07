<?php

  $ad = $_POST["ad"];
  $soyad = $_POST["soyad"];

  // echo "Adiniz: {$ad}<br />Soyadiniz: {$soyad}";

  // JSON formatında dönderelim.
  $dizi = array();
  $dizi["ad"] = $ad;
  $dizi["soyad"] = $soyad;

  echo json_encode($dizi);

?>
