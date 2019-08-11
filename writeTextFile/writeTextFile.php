<?php
  echo "<h1>Txt Dosyaya Yazma</h1>
        <form method='post'>
          Name: <input type='text' name='name' /><br />
          Surname: <input type='text' name='surname' /><br />
          <input type='submit' value='Add File' /><br />
        </form>";

  if(isset($_POST["name"])){
    $content = file_get_contents("isimler.txt"); // echo $content;
    $newPerson = $_POST["name"] . ";" . $_POST["surname"] . "\n";
    file_put_contents("isimler.txt", $content . $newPerson);
  }

  //$content = explode("\n", file_get_contents("isimler.txt"));
  //print_r($content);
  $content = file("isimler.txt");

  echo "<table border='1' cellpadding='5' cellspacing='0'>
      <tr>
        <td>Name</td>
        <td>Surname</td>
      </tr>";

  foreach ($content as $key => $value) {
    list($name, $surname) = explode(";", $value);
    echo "<tr>
            <td>$name</td>
            <td>$surname</td>
          </tr>";
  }

  echo "</table>";
?>
