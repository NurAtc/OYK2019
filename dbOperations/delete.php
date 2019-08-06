<?php
include("db.php");

if(isset($_POST["id"])){
  if($_POST["dTextbox"] == "DLT"){
    $SQL = "DELETE FROM db_deneme_rehber WHERE id='{$_POST["id"]}'";
    $rows = mysqli_query($db, $SQL);
    echo "Deleted..";
    die();
  }
  else echo "Not Confirmed!";
}

$SQL = "SELECT * FROM db_deneme_rehber WHERE id='{$_GET["id"]}'";
//echo $SQL;
$rows = mysqli_query($db, $SQL);
$row = mysqli_fetch_assoc($rows);
//print_r($row);
echo "<h1>{$row["name"]} {$row["surname"]}</h1>ID: {$row["id"]}<br />Name: {$row["name"]}<br />Surname: {$row["surname"]}<br />City: {$row["city"]}";
?>

<form method="post">
  <input type="hidden" name="id" value="<?php echo $row["id"];?>"/>
  Delete this person: <input type="text" name="dTextbox" value="" placeholder="Type DLT to delete"><br /><br />
  <input type="submit" name="dButton" value="Delete" />
</form>
