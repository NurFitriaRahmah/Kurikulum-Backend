<?php
require_once('koneksi.php');
class AdminBlog extends Koneksi{

    public function adminblog_index(){

        $data = "SELECT * FROM blog";
        $blogs = $this->konek()->query($data);
        ?>
        <center>
            <h1><i>Artikel Kita</i></h1>
        </center> 
        <?php
        
        if ($blogs->num_rows > 0){
            while($blog = $blogs->fetch_assoc()){
                ?>
                <style>
                    body {
                            background: linear-gradient(to top,#FFF886,#F072B6)
                        } 
                </style> 
                <body>
                    <div style="background-color:white; border: 1px solid #000; padding: 5%; margin-top: 3%">
                        <h3><?php echo $blog['title'] ?></h3>
                        <small>
                            <h4><i>Kategori: <?php echo $blog['kategori'] ?></i></h4>
                        </small>
                        <hr>
                        <p><?php echo $blog['content'] ?></p>
                        <br>
                        <small>
                            penulis : <i><?php echo $blog['author'] ?></i> || <i><?php echo $blog['date'] ?></i>
                            <?php 
                            if($_SESSION['status']="login"){
                                ?>
                                || <a style="color:red;" href="blog_delete.php?id=<?php echo $blog['id']; ?>">Delete</a>
                                || <a href="blog_edit.php?id=<?php echo $blog['id'];?>" style="color:green;" href="">Edit</a>
                                <?php
                            }
                            ?>                      
                        </small>
                        
                    </div>
                </body>
                <?php
            }
        }else{
            echo '<center><h2>Tidak ada Artikel</h2></center>';
        }
    }
}