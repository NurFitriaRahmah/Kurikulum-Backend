<?php
$servername = "localhost";
$username = "fitria";
$password = "?>mypass321";

try {
    $con = new PDO("mysql:host=$servername;dbname=contoh1", $username, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi Berhasil";
}
catch(PDOException $e){
    echo "Koneksi Gagal : ".$e->getMessage();
}
?>