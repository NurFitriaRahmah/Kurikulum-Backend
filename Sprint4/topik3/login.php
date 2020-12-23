<?php
require_once('config.php');
session_start();
class Login extends Config 
{
   
    public function login() 
    {
        $error = 'Anda belum registrasi!';
        if (isset($_POST['submit'])) {
            if (empty($_POST['name']) || empty($_POST['pass'])) { 
                echo "Nama dan Password tidak boleh kosong!.<br>";
                echo "Silahkan isi terlebih dahulu.";
            } else {
                $name = $_POST['name']; 
                $pass = $_POST['pass'];

                $login = mysqli_query($this->connect(), "SELECT username, password from users where username='$name' AND password='$pass' ");
                $cek = mysqli_num_rows($login);

                if ($cek > 0) {
                    $_SESSION['name'] = $name;
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
$login = new Login();

if(isset($_SESSION['status'])){
    header('Location: profile.php');
}else{


?>  
<head>
<link rel="stylesheet" href="style.css">  
</head>  
<h3><a href="index.php">Home</a></h3>
<body>
    <div id="card">
        <h1>Login</h1>
        <form action="#" method="post">
            <label for="">Username</label>
            <input type="text" name="name" placeholder="Masukkan Username" id="form">
            <br>
            <label for="">Password</label>
            <input type="password" name="pass" placeholder="Masukkan Password" id="form">
            <br>
            <input type="submit" name="submit" value="Login">
            <p>Belum punya akun?</p>
            <p><a href="register.php">Registrasi sekarang</a></p>
        </form>
    </div>
</body>
<?php 
}
$login->login();
?>