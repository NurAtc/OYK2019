<?php
  @session_start();
  @session_destroy();
  echo "Oturumunuz sona erdi" . "<pre>\n</pre>" . "<a href='login.php'>Sign In</a>";
?>
