<?php
require_once('koneksi.php');
session_start();
class Log extends Koneksi
{
   
    public function log() 
    {
        $error = 'Anda belum registrasi!';
        if (isset($_POST['submit'])) {
            if (empty($_POST['nama']) || empty($_POST['pass'])) { 
                echo "Nama dan Password tidak boleh kosong!.<br>";
                echo "Silahkan isi terlebih dahulu.";
            } else {
                $nama = $_POST['nama']; 
                $pass = $_POST['pass'];

                $login = mysqli_query($this->konek(), "SELECT nama, password FROM user WHERE nama='$nama' AND password='$pass' ");
                $cek = mysqli_num_rows($login);

                if ($cek > 0) {
                    $_SESSION['nama'] = $nama;
                    $_SESSION['status'] = "login";
                    return header("Location: profile.php");
                } else {
                    echo $error."<br>";
                    echo "Silahkan registrasi terlebih dahulu!";
                }
            }
        }
    }
}
$login = new Log();

if(isset($_SESSION['status'])){
    header('Location: profile.php');
}else{


?> 
<style> 
    #card {
        background:lightpink;
        border-radius: 8px;
        box-shadow: 1px 2px 8px black;
        height: 450px;
        margin: 80px auto;
        width: 300px;
        padding: 30px 20px;
    }

    #label {
        font-size: 15pt;
        margin: 100px auto;
    }

    #form{
        box-sizing: border-box;
        width: 100%;
        padding: 10px;
        font-size: 11pt;
        margin-bottom: 30px;
    }
</style> 
<h3><a href="index.php">Home</a></h3>
<body style="background: linear-gradient(to top,#FFF886,#F072B6)">
    <div id="card">
        <h1>Login</h1>
        <p>Silakan isi formulir berikut sebelum login.</p>
        <hr>
        <form action="#" method="post">
            <label for="">Username : </label>
            <input type="text" name="nama" placeholder="Masukkan Username" id="form">
            <br>
            <label for="">Password : </label>
            <input type="password" name="pass" placeholder="Masukkan Password" id="form">
            <br>
            <input type="submit" name="submit" value="Login">
            <hr>
            <p>Belum punya akun?</p>
            <p><a href="register.php">Registrasi sekarang</a></p>
        </form>
    </div>
</body>
<?php 
}
$login->log();
?>