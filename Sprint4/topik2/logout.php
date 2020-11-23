<?php
   session_start();
   session_destroy();
   echo "Kamu berhasil logout.";
   echo "<br>";
   echo "Klik disini untuk <a href='login.php'>login lagi</a>";
?>