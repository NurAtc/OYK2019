<h2>Add Two Numbers - GET Method</h2>

<?php
if(!isset($_GET["firstNo"])) { ?>
  <form method="get">
    Enter first no: <input type="text" name="firstNo" placeholder="Enter no:" /><br />
    Enter second no: <input type="text" name="secondNo" placeholder="Enter no:" /><br />
    <input type="submit" value="Sum" />
  </form>
<?php } if(isset($_GET["firstNo"])) {
  $sum = $_GET["firstNo"] + $_GET["secondNo"];
  echo "<h1>Sonuc: {$_GET["firstNo"]} + {$_GET["secondNo"]} = $sum</h1>";
  echo "<a href='?'>New Operation..</a>";
}
?>
