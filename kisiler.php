<h1> .txt Dosyasindan Kisi Okuma </h1>

<table border=1 cellpadding="5">
  <tr>
    <td>Ad</td>
    <td>Soyad</td>
    <td>Sehir</td>
  </tr>

<?php
/*$str = "Hatice;Atici;Ankara";
$arrKisi = explode(";", $str);
echo "Adi: " . $arrKisi[0] . "<br />Soyadi: " . $arrKisi[1];
//echo "Adi: {$arrKisi[0]} <br />Soyadi: {$arrKisi[1]}";*/

$arrSatirlar = file("kisiler.txt");
sort($arrSatirlar);

foreach ($arrSatirlar as $key => $value) {
  $arrKisi = explode(";", $value);
  echo
  "<tr>
    <td>$arrKisi[0]</td>
    <td>$arrKisi[1]</td>
    <td>$arrKisi[2]</td>
  </tr>";
}
?>

</table>
