<?php
$servername = "localhost";
$username = "fitria";
$password = "?>mypass321";
$database = "contoh1";

$con = new mysqli($servername, $username, $password, $database);

if($con->connect_error){
    die("Koneksi Gagal : ".$con->connect_error);
} else {
    echo "Koneksi Berhasil!";
}
?>