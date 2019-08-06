<?php
include("db.php");

$SQL = "SELECT * FROM db_deneme_rehber WHERE id='{$_GET["id"]}'";
$rows = mysqli_query($db, $SQL);
$row = mysqli_fetch_assoc($rows);

echo "<h1>{$row["name"]} {$row["surname"]}</h1>Name: {$row["name"]}<br />Surname: {$row["surname"]}<br />City: {$row["city"]}";
?>
