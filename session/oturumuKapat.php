<?php
@session_start();
session_destroy(); // bunu yapmak için yuarıdakini yazmak zorundayız.
// $_SESSION["Giris Basarili"] = 0;
 ?>

<a href="index.php">Oturumunuz sona erdi.
Tekrar giris yapmak için tıklayiniz.</a>
