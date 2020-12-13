<?php
session_start();

require_once("koneksi.php");

if($_SESSION['status']!="login"){
    header("Location: login.php");
  }

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];

    $query = "UPDATE data_barang SET kode = '$kode', nama = '$nama', jenis = '$jenis' WHERE id = $id";
    if(mysqli_query($konek, $query)){
       header("location: beranda.php");
    }else{
        echo "Edit Data Gagal";
    }
}

$id = $_GET['id'];
$query = "SELECT * FROM data_barang WHERE id = $id";
$data = mysqli_query($konek, $query);
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
    <?php while($row = mysqli_fetch_assoc($data)){?>
    <form action="edit.php" method="POST" id="form">
       Kode :
       <input type="text" name="kode" value="<?php echo $row['kode'];?>"><br><br>
       Nama :
       <input type="text" name="nama" value="<?php echo $row['nama'];?>"><br><br>
       Jenis :
       <input type="text" name="jenis" value="<?php echo $row['jenis'];?>"><br><br>
       <input type="hidden" name="id" value="<?php echo $row['id'];?>">
       <input type="submit" name="submit" value="Edit data" id="tambah">
    </form>
    <?php
    }

     mysqli_close($konek);
    ?>
</body>
</html>