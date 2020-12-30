<?php
require_once('adminblog.php');
if($_SESSION['status']!="login"){
    header("Location: login.php");
}
class Delete extends AdminBlog{
    public function blog_delete($id){
        $sql = "DELETE FROM blog WHERE id=$id";

        if (mysqli_query($this->konek(), $sql)) {
            return header('Location: index_admin.php');
        } else {
            echo "Error deleting record: " . mysqli_error($this->konek());
        }
        
    }
}
$blog = new Delete(); 
$blog->blog_delete($_GET['id']); 
?>