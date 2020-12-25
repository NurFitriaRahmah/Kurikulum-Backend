<?php
session_start();
class ProfileAuthor{

    public function profileauthor(){
        if($_SESSION['status']="login"){
            ?>
            <h3><a href="index_author.php">Kembali</a> | <a href="index_author.php">Buat Artikel</a> | <a href="logout.php">Keluar</a></h3>
            <hr>
            <h1>Profile</h1>
            <p>
                Selamat Datang <b><i><?php echo $_SESSION['name']; ?></i></b>
            </p>
            <?php
        }else{
            echo 'Silahkan Login Terlebih dahulu <br>';
            echo '<a href="index_author.php">Login</a>';
        }
    }

}

$profile = new ProfileAuthor();