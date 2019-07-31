<!DOCTYPE html>
<html>
<body>

<?php
  // phpinfo(); // php.ini dosyasına erişmek için yaptık.
?>

<!-- If Example(mine) -->
<?php
$A = 7;
if($A == 7) echo "Anin degeri 7dir";
else if($A == 14) echo "Anin degeri 14tur.";
?>

<!-- If Example(teacher's) -->
<?php
$A = 21;
if($A == 17):
?>
<p>A'nin degeri 17dir.</p>
<?php else: ?>
<p>A'nin degeri 17 degildir.</p>
<?php endif; ?>

<!-- Php between html -->
<?php
$a = 22;
?>
<p>a'nin degeri
<?php echo "$a"; ?>
dir.</p>

<!-- Php example -->
<?php
$a = 33;
echo "a'nin degeri " . $a . "dir.";
?>

<!-- Kare alma fonks. -->
<?php
$a = 11;
function kareAl($no){
  return $no*$no;
}
echo "$a'nin karesi= " . kareAl($a);
?>

<!-- GET Example -->
<?php
$no = $_GET["sayi"];
echo "URL'den aldigimiz deger: $no";
?>

<!-- Tek tırnak ifadesinin içindekini olduğu gibi yazar. -->
<?php
$no = $_GET["adet"];
echo 'URLden aldigimiz deger: $no';
?>

<!-- var_dump(): give info about variable type and value -->
<?php
      $isimler = array("Nuri", "Ali", "Ayşe");
      $sayilar = array(1123,2141,1233,4457,5,6,7);
      $kodlar = array("zn" => "Çinko", "fe" => "Demir");
      $karma  = array("Ankara", 78, "au" => "Altın", false);
      echo "<pre>";
      var_dump($karma);
      echo "</pre>";
      echo $kodlar["zn"] . "\n";
      echo $karma["au"];
?>

</body>
</html>
