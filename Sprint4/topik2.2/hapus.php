<?php
require_once("koneksi.php");

$id = $_GET['id'];
$query = "DElETE FROM data_barang WHERE id =$id";

if(mysqli_query($konek, $query)){
    header("location: beranda.php");
}else{
    echo "Hapus data gagal";
}
?>