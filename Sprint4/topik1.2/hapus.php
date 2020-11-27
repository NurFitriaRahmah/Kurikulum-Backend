<?php
require_once("koneksi.php");

$id = $_GET['id'];
$query = "DElETE FROM data_barang WHERE id =$id";

if(mysqli_query($konek, $query)){
    header("location: index.php");
}else{
    echo "Hapus data gagal";
}
?>