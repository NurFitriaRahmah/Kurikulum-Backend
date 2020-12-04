<?php
  session_start();
  $error = 'Username atau Password Salah !!';
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
        echo $error;
    }
  }else{
    echo $error;
  }
?>