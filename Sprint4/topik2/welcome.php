<?php
   session_start();
   echo "Selamat Datang " . $_SESSION['username'];
   echo "<br>";
   echo "<a href='logout.php'> logout </a>";
?>