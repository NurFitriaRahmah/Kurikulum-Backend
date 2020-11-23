<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  <style type="text/css">
    table{background-color: mediumspringgreen; box-shadow: 10px 10px 5px black;}
     th {text-align: center;}
  </style>
    <table cellpadding="5" cellspacing="10" align="center">
     <tr><th><h2>Form Login</h2></th></tr>
     <form method="POST" action="validate.php">
      <tr><th>Username : </th>
      <td align="center"><input type ="text" name ="username"></td></tr>
      <tr><th>Password : </th>
      <td align="center"><input type ="password" name ="password"></td></tr>
      <tr><td colspan="2" align="center">
        <input type="checkbox" name="remember" value="1">Remember Me</td></tr>
      <tr><td colspan="2" align="right">
          <input type="submit" name="login" value="Login">
      </td></tr>
     </form>
    </table>
</body>
</html>