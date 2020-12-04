<?php
  $server = "localhost";
  $user = "fitria";
  $pass = "?>mypass321";
  $db = "Barang";

  $konek = mysqli_connect($server, $user, $pass, $db)
           or die("Koneksi ke database gagal!");
?>