<?php
session_start();
class ProfileAdmin{

    public function profileadmin(){
        if($_SESSION['status']="login"){
            ?>
            <style>
               body {
                         background: linear-gradient(to top,#FFF886,#F072B6)
                    } 
            </style>
            <h3><a href="index_admin.php">Kembali</a> | <a href="index_admin.php">Buat Artikel</a> | <a href="logout.php">Keluar</a></h3>
            <hr>
            <center style="background-color:white; border: 1px solid #000; padding: 5%; margin-top: 3%; width: 200px;">
            <h1>Profile</h1>
            <p>
                Selamat Datang <b><i><?php echo $_SESSION['nama']; ?></i></b>
            </p>
            </center>
            <?php
        }else{
            echo 'Silahkan Login Terlebih dahulu <br>';
            echo '<a href="index_author.php">Login</a>';
        }
    }

}

$profile = new ProfileAdmin();