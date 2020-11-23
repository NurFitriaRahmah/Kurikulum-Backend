<?php

   $user = "fitria";
   $pass = "12345678";

   if(isset($_POST['login'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
       if( $username == $user and $password == $pass) { 
           if(isset($_POST['remember'])) {
            setcookie('username', $user, time()+60*60*7);
           }
           session_start();
           $_SESSION['username'] = $username;
           header("location: welcome.php");
       } else {
          echo "Username atau Password tidak valid.<br>
                 klik disini untuk <a href='login.php'>coba lagi</a>";
       }
   } else {
       header("location: login.php");
   }
?>