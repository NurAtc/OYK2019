<?php
include("db.php");

if(isset($_POST["name"]))
{
  $SQL = "INSERT INTO db_deneme_rehber SET name = '{$_POST["name"]}', surname = '{$_POST["surname"]}', city = '{$_POST["city"]}'";
  $rows = mysqli_query($db, $SQL);
  echo "<h4>Insertion completed.</h4>";
}
?>

<h1>Insertion</h1>
<form method="post">
  Name: <input type="text" name="name" /><br />
  Surname: <input type="text" name="surname" /><br />
  City: <input type="text" name="city" /><br />
  <input type="submit" value="Sign Up" />
</form>
