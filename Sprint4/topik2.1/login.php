<?php

$email = 'qwerty@gmail.com';
$password = '87654321';

$email = $_POST['email'];
$password = $_POST['password'];

setcookie('email',$email,time() + (86400 * 30), "/");

?>

<?php
if(isset($_COOKIE['email'])){
   header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Selamat Anda Berhasil Login!</h2>

    <form method="POST" action="logout.php">
        <input type="submit" name="Logout" value="logout" id="tombol_logout">
    </form>
</body>
</html>

