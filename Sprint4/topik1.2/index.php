<?php
  require_once("koneksi.php");
  
  $query ="SELECT * FROM data_barang";
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
   <center>
     <h3>Daftar Barang</h3>
     <a href="tambah.php">+ Tambah Data</a><br><br>
     <table border="1px">
        <tr>
           <th>Kode</th>
           <th>Nama</th>
           <th>Jenis</th>
           <th>Opsi</th> 
        </tr>

        <?php while($row = mysqli_fetch_assoc($data)){?>
            <tr>
                <td><?php echo $row['kode'];?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['jenis'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id'];?>">Hapus</a>
                </td>
            </tr>
   </center>
        <?php
        }

        mysqli_close($konek);
        ?>
    </table>
</body>
</html>