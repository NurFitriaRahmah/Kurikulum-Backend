<?php
require_once("koneksi.php");
if(isset($_POST['submit'])){
   $kode = $_POST['kode'];
   $nama = $_POST['nama'];
   $jenis = $_POST['jenis'];

   $query = "INSERT INTO data_barang (kode, nama, jenis) 
             VALUES ('$kode', '$nama', '$jenis')";
   if(mysqli_query($konek, $query)){
       header("location: index.php");
   }else{
       echo "Tambah data gagal";
   }
}

mysqli_close($konek);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h3 id="form">Tambah Data Barang</h3>
    <form action="tambah.php" method="POST" id="form">
       Kode :
       <input type="text" name="kode"><br><br>
       Nama :
       <input type="text" name="nama"><br><br>
       Jenis :
       <input type="text" name="jenis"><br><br>
       <input type="submit" name="submit" value="Tambah Data" id="tambah"><br><br>
    </form>
</body>
</html>