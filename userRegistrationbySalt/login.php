<?php
require("db.php");
require("sabitler.php");

if(isset($_POST["nameSurname"])){
  $PASS = md5($_POST["password"] . $TUZ);
  $SQL = "SELECT * FROM users WHERE nameSurname='{$_POST["nameSurname"]}' AND password='$PASS'";
  // echo $SQL;
  $rows = mysqli_query($db, $SQL);
  if(mysqli_num_rows($rows) == 1) echo "Success :)";
  else echo "Incorrect password or nameSurname";
}
?>

<h1>Login Page</h1>
<form method="post">
  Name&Surname: <input type="text" name="nameSurname" value="<?php echo $_POST["nameSurname"]; ?>"/><br />
  Password: <input type="password" name="password" /><br />
  <input type="submit" value="Log In" />
</form>
