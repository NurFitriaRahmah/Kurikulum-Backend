<?php
  session_start();

  require_once("koneksi.php");

  if (isset($_POST['login'])){
      $user = $_POST['user'];
      $pass = $_POST['pass'];

      $con = mysqli_connect('localhost', 'fitria', '?>mypass321', 'crud');

      $login = mysqli_query($con, "SELECT user, password FROM login WHERE user = '$user' AND password = '$pass'");

      $cek = mysqli_num_rows($login);

    if ($cek>0){
        $_SESSION ['user'] = $user;
        $_SESSION ['status'] = "login";
        header("Location: beranda.php");
    }else{
      header("Location: login.php");
    }
  }else{
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tanpa data user</title>
</head>
<body>
  <br>
  <a href="login.php">
    <center>
     <input type="submit" name="login" value="Kembali"><h1></h1>
    </center>
  </a>
  <br>
</body>
</html>