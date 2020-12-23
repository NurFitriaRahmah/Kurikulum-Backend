<?php
require_once('config.php');
session_start();
class Register extends Config
{
   
    public function register()
    {
        $error = 'Silahkan diisi terlebih dahulu!';
        
        if (isset($_POST['submit'])) {
            if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['pass'])){
                echo $error;
            } else {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
            
                $query = "INSERT INTO users (username, email, password) 
                          VALUES ('$name', '$email', '$pass')";
                if(mysqli_query($this->connect(), $query)){
                    header("location: login.php");
                }else{ 
                    echo "$error";
                }
            }
                
        }
    }
}
$reg = new Register();

if(isset($_SESSION['status'])){
    header('Location: login.php');
}else{


?>
<head>
<link rel="stylesheet" href="style.css">  
</head>  
<h3><a href="index.php">Home</a></h3>
<body>
    <div id="card">
        <h1>Registration</h1>
        <form action="#" method="post">
            <label for="">Username</label>
            <input type="text" name="name" placeholder="Masukkan Username" id="form">
            <br>
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Masukkan Email" id="form">
            <br>
            <label for="">Password</label>
            <input type="password" name="pass" placeholder="Masukkan Passsword" id="form">
            <br>
            <input type="submit" name="submit" value="Register">
            <p>Sudah punya akun?</p>
            <p><a href="login.php">Login disini</a></p>
        </form>
    </div>
</body>
<?php 
}