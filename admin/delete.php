<?php 
session_start();
if (!isset($_SESSION['admin'])) {
	header('location:login.php');
}


 ?>
<?php 
require 'connection.php';

$id = $_GET['del'];

$del_qry = "DELETE FROM posts WHERE post_id ='$id'";
$q = mysqli_query($conn,$del_qry);
if (!$q) {
	header('location:view_post.php?error=error post not delete!!');
	
}
else {
	header('location:view_post.php?deleted=post deleted!!');
}


 ?>