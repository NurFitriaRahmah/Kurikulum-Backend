<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div id ="card">
    <p id="tulisan">Silahkan login</p>
     <form method="POST" action="validate.php">
      <label>Username : </label>
      <input type ="text" name ="username" id="form_login">
      <label>Password : </label>
      <input type ="password" name ="password" id="form_login">
      <input type="checkbox" name="remember" value="1">Remember me</>
      <input type="submit" name="login" value="Login" id="tombol_login">
     </form>
  </div>
</body>
</html>