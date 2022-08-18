<?php 
session_start();
include 'header.php'; ?>
<?php 

if (!isset($_SESSION['admin'])) {
	header('location:login.php');
}

	require 'connection.php';
	
	$po_id = $_GET['edit'];

	$s_qry ="SELECT * FROM posts WHERE post_id = '$po_id' "; 
	$s_result = mysqli_query($conn, $s_qry);
	
	$up_data = mysqli_fetch_assoc($s_result);

	 $up_id = $up_data['post_id'];
	 $up_title = $up_data['post_title'];
	 $up_author = $up_data['post_author'];
	 $up_img = $up_data['post_image'];
	 $up_content = $up_data['post_content'];
	 
	
 ?>


<div class="ins-post-box">
	<form class="ins-post" method="post" action="edit_post.php?edit=<?= $up_id;?>" enctype="multipart/form-data">
		<p>Add Title</p>
		<input type="text" name="post_title" placeholder="Add post title" value="<?= $up_title; ?>">
		<p>Author Name</p>
		<input type="text" name="post_author" placeholder="Add post Author" value="<?= $up_author; ?>">
		<p>Post Image</p>
		<img src="../<?= $up_img;?>" width="40px" height="40px">
		<p>Add Post Content</p>
		<textarea name="post_content" placeholder="Add post Content"><?= $up_content; ?></textarea><br>
		<button type="submit" name="submit">Update Now</button>
	</form>
</div>

<?php 

	if(isset($_POST['submit']))
{
		$po_id =$_GET['edit'];
		$p_title = $_POST['post_title'];
		$p_author = $_POST['post_author'];
		$p_content = $_POST['post_content'];
	
				
	 	// php data insert
	 	$up_query = "UPDATE posts SET post_title='$p_title', post_author='$p_author', post_content='$p_content' WHERE post_id='$po_id'";
	 	$up_query_result = mysqli_query($conn,$up_query);
	 	if (!$up_query_result) {
	 		echo "<h1>Error update this post</h1>";
	 	}
	}


 ?>

