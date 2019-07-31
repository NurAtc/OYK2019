<h1>Sozler (Dosyadan)</h1>

<?php
echo "<h2>file_get_contents:</h2>";
$file = file_get_contents("sozler.txt");
echo $file;
/*$file = explode("\n", file_get_contents("sozler.txt"));
for($i=0; $i<5; $i++)
  echo $file[$i] . "<br />";*/

echo "<h2>file Komutu Ciktisi:</h2>";
$file = file("sozler.txt");
foreach ($file as $key => $value) {
  echo "<b>$key</b>" . ". elemanin degeri: " . "<b>$value</b>" . "<br />";
}
?>
