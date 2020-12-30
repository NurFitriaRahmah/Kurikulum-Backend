<?php 
require_once('adminblog.php');
$blog = new AdminBlog();

$id = $_GET['id'];
$show = mysqli_query($blog->konek(),"SELECT * FROM blog WHERE id='$id'");

if(mysqli_num_rows($show) == 0){
    echo 'Data tidak di temukan'; 
}else{
    $data = mysqli_fetch_assoc($show);
}
class Edit extends AdminBlog{
    public function blog_edit($id){
        if(isset($_POST['simpan'])){
            $author=$_POST['name'];
            $title = $_POST['title'];
            $kategori = $_POST['kategori'];
            $content = $_POST['content'];
            $sql = "UPDATE blog SET author='$author', title='$title', kategori='$kategori', content='$content' WHERE id='$id'";

            if(mysqli_query($this->konek(),$sql)){
                echo "berhasil mengedit";
            }else{
                echo "Error Edit record: " . mysqli_error($this->konek());
            }
        }
    }
}
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
<head>
 <link rel="stylesheet" href="style.css">  
</head>  
<body style="background: linear-gradient(to top,#FFF886,#F072B6)">
<h1>Edit Artikel</h1>
<hr>
<div id="card">
    <form action="#" method="post">
        <label for="">Author</label>
        <input type="text" name="name" value="<?php echo $data['author'];?>" id="form">
        <br>
        <label for="">Judul</label>
        <input type="text" name="title" value="<?php echo $data['title'];?>" id="form">
        <br>
        <label for="">Artikel</label>
        <textarea name="content" id="" cols="30" rows="10" id="form"><?php echo $data['content'];?></textarea>
        <br><br>
        <label for="">Kategori</label>
        <select name="kategori">
            <option value="kesehatan">Kesehatan</option>
            <option value="alam">Alam</option>
            <option value="budaya">Budaya</option>
        </select>
        <br><br>
        <input type="submit" name="simpan" value="simpan">
    </form>
    </div>
</body>
<?php 
$blog = new Edit;
$blog->blog_edit($id);
?>