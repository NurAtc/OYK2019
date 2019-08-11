<?php
  echo "<h1>Txt Dosyasindan Okunan Kisiler</h1>";
  echo "<table border='1' cellpadding='5' cellspacing='0'>
       <tr>
        <td>Name</td>
        <td>Surname</td>
        <td>City</td>
       </tr>";

$read = file("kisiler.txt"); // array'e atar.
foreach ($read as $key => $value) {
  /*$exp = explode(";", $value);
  //print_r($exp); echo "<pre>\n</pre>";
  echo "<tr>
         <td>{$exp["0"]}</td>
         <td>{$exp["1"]}</td>
         <td>{$exp["2"]}</td>
        </tr>";*/
  list($name, $surname, $city) = explode(";", $value);
  echo "<tr>
         <td>$name</td>
         <td>$surname</td>
         <td>$city</td>
        </tr>";
}
echo "</table>";
?>
