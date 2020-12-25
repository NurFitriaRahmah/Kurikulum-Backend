<?php
session_start();
class Profile{

    public function profile(){
        if( isset($_SESSION['status']) ){
            ?>
            <h3><a href="index.php">Beranda</a> | <a href="index_author.php">Halaman Author</a> | <a href="logout.php">Keluar</a></h3>
            <hr>
            <h1>Profile</h1>
            <p>
                Selamat Datang <b><i><?php echo $_SESSION['name']; ?></i></b>
            </p>
            <?php
        }else{
            echo 'Silahkan Login Terlebih dahulu <br>';
            echo '<a href="index.php">Login</a>';
        }
    }

}

$profile = new Profile();