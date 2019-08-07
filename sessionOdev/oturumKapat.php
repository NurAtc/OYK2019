<?php
@session_start();
session_destroy(); // Oturum sonlandirildi.
// $_SESSION["Giris Basarili"] = 0; Bunu neden yazdık.
 ?>

<p>Oturumunuz sona erdi.</p>

<a href="index.php">Giris Ekrani</a>
<!-- index.php demek anasayfaya git demek -->
