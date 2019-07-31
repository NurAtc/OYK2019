<?php
@session_start();
@session_destroy();

echo "Oturumunuz sona erdi.<a href='index.php'>Tekrar giriş yapmak için tıklayınız</a>";
?>
