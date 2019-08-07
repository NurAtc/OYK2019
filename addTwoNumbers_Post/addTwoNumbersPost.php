<h2>Add Two Numbers - POST Method</h2>

<?php

if(isset($_POST["fNo"])){
  $sum = $_POST["fNo"]+$_POST["sNo"];
  echo "<h1>{$_POST["fNo"]} + {$_POST["sNo"]} = $sum</h1>";
  echo "<a href='?'>New Operation</a>";
}

if(!isset($_POST["fNo"])){ ?>

<form method="post">
  Enter first no: <input type="text" name="fNo" placeholder="Enter no" /><br />
  Enter second no: <input type="text" name="sNo" placeholder="Enter no" /><br />
  <input type="submit" value="Sum" /><br />
</form>
<?php } ?>
