<?php
require_once('authblog.php');
if($_SESSION['status']!="login"){
    header("Location: login.php");
}
class Delete extends AuthBlog{
    public function blog_delete($id){
        $sql = "DELETE FROM blog WHERE id=$id";

        if (mysqli_query($this->connect(), $sql)) {
            return header('Location: index_author.php');
        } else {
            echo "Error deleting record: " . mysqli_error($this->connect());
        }
        
    }
}
$blog = new Delete(); 
$blog->blog_delete($_GET['id']); 
?>