<?php
include("db.php");

if(isset($_POST["name"]))
{
  $SQL = "UPDATE db_deneme_rehber SET name='{$_POST["name"]}', surname='{$_POST["surname"]}', city='{$_POST["city"]}' WHERE id='{$_POST["id"]}'";
  $rows = mysqli_query($db, $SQL);
  echo "Updated.";
}

$SQL = "SELECT * FROM db_deneme_rehber WHERE id='{$_GET["id"]}'";
// echo $SQL;
$rows = mysqli_query($db, $SQL);
$row = mysqli_fetch_assoc($rows);
echo "<h1>{$row["name"]} {$row["surname"]}</h1>";
?>

<h3>Update Record</h3>
<form method="post">
  ID: <?php echo $row["id"]; ?>
  <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" /><br />
  Name: <input type="text" name="name" value="<?php echo $row["name"];?>"/><br />
  Surname: <input type="text" name="surname" value="<?php echo $row["surname"];?>"/><br />
  City: <input type="text" name="city" value="<?php echo $row["city"];?>"/><br />
  <input type="submit" name="uButton" value="UPDATE" />
</form>
