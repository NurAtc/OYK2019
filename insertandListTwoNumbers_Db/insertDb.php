<h1>Numbers</h1>
<form method="post">
  Enter first no: <input type="text" name="firstNo" placeholder="Enter no" /><br />
  Enter second no: <input type="text" name="secondNo" placeholder="Enter no" /><br />
  <input type="submit" value="INSERT" />
</form>

<?php

if(isset($_POST["firstNo"])){
  require("db.php");
  $SQL = "INSERT INTO sayilar SET sayi1='{$_POST["firstNo"]}', sayi2='{$_POST["secondNo"]}'";
  mysqli_query($db, $SQL);
  echo "<h4>Inserted..</h4>";
}
?>
