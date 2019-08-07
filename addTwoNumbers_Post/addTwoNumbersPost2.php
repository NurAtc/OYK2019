<h2>Add Two Numbers - POST Method</h2>

<?php
if(!isset($_POST["firstNo"])) { ?>
  <form method="post">
    Enter first no: <input type="text" name="firstNo" placeholder="Enter no:" /><br />
    Enter second no: <input type="text" name="secondNo" placeholder="Enter no:" /><br />
    <input type="submit" value="Sum" />
  </form>
<?php } if(isset($_POST["firstNo"])) {
  $sum = $_POST["firstNo"] + $_POST["secondNo"];
  echo "<h1>Sonuc: {$_POST["firstNo"]} + {$_POST["secondNo"]} = $sum</h1>";
  echo "<a href='?'>New Operation..</a>";
}
?>
