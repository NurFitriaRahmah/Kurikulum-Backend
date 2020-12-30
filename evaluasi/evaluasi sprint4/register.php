<?php
require_once('koneksi.php');
session_start();
class Reg extends Koneksi
{
   
    public function reg()
    {
        $error = 'Silahkan diisi terlebih dahulu!';
        
        if (isset($_POST['submit'])) {
            if(empty($_POST['nama']) || empty($_POST['email']) || empty($_POST['pass'])){
                echo $error;
            } else {
                $name = $_POST['nama'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
            
                $query = "INSERT INTO user (nama, email, password) 
                          VALUES ('$name', '$email', '$pass')";
                if(mysqli_query($this->konek(), $query)){
                    header("location: login.php");
                }else{ 
                    echo "$error";
                }
            }
                
        }
    }
}
$reg = new Reg();

if(isset($_SESSION['status'])){
    header('Location: login.php');
}else{


?>
<style>
#card {
    background:lightpink;
    border-radius: 8px;
    box-shadow: 1px 2px 8px black;
    height: 550px;
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
        <h1>Registration</h1>
        <p>Silakan isi formulir berikut untuk membuat akun.</p>
        <hr>
        <form action="#" method="post">
            <label for="">Username : </label>
            <input type="text" name="nama" placeholder="Masukkan Username" id="form">
            <br>
            <label for="">Email :</label>
            <input type="email" name="email" placeholder="Masukkan Email" id="form">
            <br>
            <label for="">Password :</label>
            <input type="password" name="pass" placeholder="Masukkan Passsword" id="form">
            <br>
            <input type="submit" name="submit" value="Register">
            <hr>
            <p>Sudah punya akun?</p>
            <p><a href="login.php">Login disini</a></p>
        </form>
    </div>
</body>
<?php 
}