<?php 
require_once('authblog.php');
$blog = new AuthBlog();

$id = $_GET['id'];
$show = mysqli_query($blog->connect(),"SELECT * FROM blog WHERE id='$id'");

if(mysqli_num_rows($show) == 0){
    echo 'Data tidak di temukan'; 
}else{
    $data = mysqli_fetch_assoc($show);
}
class Edit extends AuthBlog{
    public function blog_edit($id){
        if(isset($_POST['simpan'])){
            $author=$_POST['name'];
            $title = $_POST['title'];
            $kategori = $_POST['kategori'];
            $content = $_POST['content'];
            $sql = "UPDATE blog SET author='$author', title='$title', kategori='$kategori', content='$content' WHERE id='$id'";

            if(mysqli_query($this->connect(),$sql)){
                echo "berhasil mengedit";
            }else{
                echo "Error Edit record: " . mysqli_error($this->connect());
            }
        }
    }
}
?>
<h3><a href="index_author.php">Home</a></h3>
<head>
 <link rel="stylesheet" href="style.css">  
</head>  
<body>
<h1>Edit Artikel</h1>
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