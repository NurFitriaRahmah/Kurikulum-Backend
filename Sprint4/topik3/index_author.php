<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Session Login</title>
</head>
<body>
    <?php 
    require_once('authblog.php');
    
    if($_SESSION['status']="login"){
        ?>
        <h3>
            <a href="profile_author.php">Profile</a> |
            <a href="blog_addpost.php">Buat Artikel</a> | 
            <a href="logout.php">Keluar</a>
        </h3> 
        <?php
    }else{
        ?>
        <h3> 
            <a href="login.php">Login</a>
        </h3>
        <?php
    }
    ?>
    <hr>
    <?php 
    $blog = new AuthBlog();
    $blog->authblog_index();
    ?>
                
</body>
</html>