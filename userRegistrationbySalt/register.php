<?php
require("db.php");
require("sabitler.php");

if(isset($_POST["email"])){

  if($_POST["email"] == "") $errorMessage[] = "You must fill out the eMail box!";
  if($_POST["nameSurname"] == "") $errorMessage[] = "You must fill out the name and surname box!";
  if($_POST["password"] == "") $errorMessage[] = "You must fill out the password box!";
  if($_POST["type"] == "") $errorMessage[] = "You must select the tur!";
  if($_POST["password"] != $_POST["password1"]) $errorMessage[] = "Passwords do not match!";
  if(strlen($_POST["password"])<8)  $errorMessage[] = "Passwords must contain at least 8 characters!";

  // Is there any registration with this email?
  $SQL = "SELECT * FROM users WHERE email='{$_POST["email"]}'";
  $rows = mysqli_query($db, $SQL);
  if(mysqli_num_rows($rows) != 0) $errorMessage[] = "This email has already been taken!";

  // print_r($errorMessage);
  if(!isset($errorMessage)){ // errorMessage started to occur in errors(ifs)
    $PASS = md5($_POST["password"] . $TUZ);
    $SQL = "INSERT INTO users SET email='{$_POST["email"]}', nameSurname='{$_POST["nameSurname"]}', password='$PASS', type='{$_POST["type"]}'";
    // echo $SQL;
    mysqli_query($db, $SQL);
    echo "<h4>Kayit eklendi..</h4>";
    echo "<a href='login.php'>Login Page</a>";
  }
}
?>

<h1>Register New Member</h1>
<h4 style="color:red">
<?php
  foreach ($errorMessage as $key => $value) {
    echo $value . "<br />";
  }
?>
</h4>
<form method="post" autocomplete="off">
  EMail: <input type="text" required name="email" value="<?php echo $_POST["email"]; ?>"/><br />
  Name&Surname: <input type="text" required name="nameSurname" value="<?php echo $_POST["nameSurname"]; ?>"/><br />
  Password: <input type="password" required name="password" /><br />
  Password (repeat): <input type="password" required name="password1" /><br />
  Type: <select required name="type">
    <option value="">SELECT</option>
    <option value="M" <?php if($_POST["type"]== "M") echo "selected"; ?>>Musteri</option>
    <option value="E" <?php if($_POST["type"]== "E") echo "selected"; ?>>Esnaf</option>
  </select><br /><br />
  <input type="submit" value="Sign Up" />
</form>
