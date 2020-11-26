<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login With Cookie</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id ="card">
    <p id="tulisan">Silahkan login</p>
    <form method="POST" action="login.php">
        <label>Email :</label>
         <input type="text" name="email" placeholder="Masukkan Email" id="form_login">
        <label>Password :</label>       
         <input type="password" name="password" placeholder="Masukkan Password" id="form_login">
         <button type="submit" name="submit" id="tombol_login">Login</button>       
    </form>
  </div>
</body>
</html>