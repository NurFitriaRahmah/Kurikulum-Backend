<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Session Login</title>
</head>
<style>
    body {
            background: linear-gradient(to top,#FFF886,#F072B6)
        } 
</style> 
<body>
    <?php 
    require_once('adminblog.php');
    
    if($_SESSION['status']="login"){
        ?>
        <h3>
            <a href="profile_admin.php">Profile</a> |
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
    $blog = new AdminBlog();
    $blog->adminblog_index();
    ?>
                
</body>
</html>