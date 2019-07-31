<h1>Gunun Sozu</h1>
<?php
$sozler = array("Bir elin nesi var.",
                "Birimiz hepimiz icin.",
                "Saman altından su yürütmek.",
                "Sora sora bağdat bulunur.");
//$sozNo = rand(0,3);
//echo $sozler[ $sozNo ] . "\n";
//echo $sozler[2] . "\n";
/*for($i=1; $i<=10; $i++)
  echo $sozler[ $sozNo ] . "\n";*/

  for($i=1; $i<=10; $i++)
  {
    $sozNo = rand(0,3);
    echo $sozler[ $sozNo ] . "<br />";
  }

?> // en son kodumuz php ise bu olmasa da olur.
