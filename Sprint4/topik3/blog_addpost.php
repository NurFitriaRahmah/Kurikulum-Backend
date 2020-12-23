<?php
require_once('authblog.php');

class Add extends AuthBlog{
    public function blog_create()
    {
        if($_SESSION['status']="login"){
            ?>
            <head>
                <link rel="stylesheet" href="style.css">  
            </head>  
            <h3><a href="index_author.php">Home</a></h3>
            <h1>Buat Artikel</h1>
            <br>
            <body>
                <div id="card">
                <form action="#" method="post" enctype="multipart/form-data">
                    <label for="">Author</label>
                    <input type="text" name="name" id="form">
                    <br>
                    <label for="">Judul</label>
                    <input type="text" name="title" id="form">
                    <br>
                    <label for="">Artikel</label>
                    <textarea name="content" id="" cols="30" rows="10" id="form"></textarea>
                    <br><br>
                    <label for="">Kategori</label>
                    <select name="kategori">
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Alam">Alam</option>
                        <option value="Budaya">Budaya</option>
                    </select>
                    <br><br>
                    <input type="submit" name="submit" value="submit">
                </form>
            </body>
            <?php
        
            if ($_POST['submit']) {
                $title = $_POST['title'];
                $content = $_POST['content'];
                $kategori = $_POST['kategori'];
                $author = $_POST['name'];
                $date = date('Y-m-d');
        
                $insert = "INSERT INTO blog (title, content, kategori, author, date) VALUES ('$title', '$content', '$kategori', '$author', '$date') ";
                if($this->connect()->query($insert) === TRUE ){
                    echo 'Berhasil Menambah Artikel';
                }else{
                    echo "Error: " , $insert . "<br>" . $this->connect()->error;
                }
                $this->connect()->close();
            }
        }else{
            echo 'Silahkan Login Terlebih dahulu <br>';
            echo '<a href="index_author.php">Login</a>';
        }
    }
}
$blog = new Add;
$blog->blog_create();
?>