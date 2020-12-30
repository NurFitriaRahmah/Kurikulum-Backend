<?php
require_once('adminblog.php');

class Add extends AdminBlog{
    public function blog_create()
    {
        if($_SESSION['status']="login"){
            ?>
            <style> 
                #card {
                background: lightpink;
                border-radius: 8px;
                box-shadow: 1px 2px 8px black;
                height: 450px;
                margin: 80px auto;
                width: 300px;
                padding: 30px 20px;
                }

                #label {
                font-size: 15pt;
                margin: 100px auto;
                }

                #form{
                box-sizing: border-box;
                width: 100%;
                padding: 10px;
                font-size: 11pt;
                margin-bottom: 30px;
                }
            </style> 
            <h3><a href="index_admin.php">Home</a></h3>
            <h1>Buat Artikel</h1>
            <hr>
            <br>
            <body style="background: linear-gradient(to top,#FFF886,#F072B6)">
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
                if($this->konek()->query($insert) === TRUE ){
                    echo 'Berhasil Menambah Artikel';
                }else{
                    echo "Error: " , $insert . "<br>" . $this->konek()->error;
                }
                $this->konek()->close();
            }
        }else{
            echo 'Silahkan Login Terlebih dahulu <br>';
            echo '<a href="index_admin.php">Login</a>';
        }
    }
}
$blog = new Add;
$blog->blog_create();
?>