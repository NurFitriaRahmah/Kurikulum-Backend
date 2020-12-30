<?php
require_once('koneksi.php');
class Blog extends Koneksi{

    public function blog_index(){

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
                <head>
                    <link rel="stylesheet" href="style.css">  
                </head>  
                <body style="background: linear-gradient(to top,#FFF886,#F072B6)">
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