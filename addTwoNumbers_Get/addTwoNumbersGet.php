<h2>Add Two Numbers - GET Method</h2>

<?php
if(isset($_GET["fNo"])){
  $sum = $_GET["fNo"]+$_GET["sNo"];
  echo "<h1>{$_GET["fNo"]} + {$_GET["sNo"]} = $sum</h1>";
  echo "<a href='?'>New Operation</a>";
}

if(!isset($_GET["fNo"])){ ?>

<form method="get">
  Enter first no: <input type="text" name="fNo" placeholder="Enter no" /><br />
  Enter second no: <input type="text" name="sNo" placeholder="Enter no" /><br />
  <input type="submit" value="Sum" /><br />
</form>
<?php } ?>
