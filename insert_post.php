<?php include 'nav.php'; ?>
<div class="ins-post-box">
	<form class="ins-post" method="post" action="insert_post.php" enctype="multipart/form-data">
		<p>Add Title</p>
		<input type="text" name="post_title" placeholder="Add post title">
		<p>Author Name</p>
		<input type="text" name="post_author" placeholder="Add post Author">
		<p>Add Post Image</p>
		<input type="file" name="post_img">
		<p>Add Post Content</p>
		<textarea name="post_content" placeholder="Add post Content"></textarea><br>
		<button type="submit" name="submit">Publish Now</button>
	</form>
</div>


<?php 
	require 'connection.php';
if(isset($_POST['submit']))
{

	if($_POST['post_title']!="" && $_POST['post_author']!="" && $_POST['post_content']!="" && $_FILES['post_img']!="")
	{

	$post_title = $_POST['post_title'];
	$post_author = $_POST['post_author'];
	$post_date = date("d-m-y");
	$post_content = $_POST['post_content'];
	// Images code
	$post_img_name = $_FILES['post_img']['name'];
	$post_img_type = $_FILES['post_img']['type'];
	$post_img_size =$_FILES['post_img']['size'];
	$post_img_folder = "post_img/".$post_img_name;
	$post_img_tmp = $_FILES['post_img']['tmp_name'];
	
	if ($post_img_type == "image/jpeg" || $post_img_type == "image/png" || $post_img_type == "image/gif")
	{
	 	// Upload Image In Folder
		move_uploaded_file($post_img_tmp, $post_img_folder);

	 	// php data insert
	 	$in_query = "INSERT INTO posts (post_title, post_author, post_date, post_image, post_content) VALUES ('$post_title','$post_author','$post_date','$post_img_folder','$post_content')";
	 	$in_query_result = mysqli_query($conn,$in_query);
	}
	else
	{
		echo "<script>alert('please select an image');</script>";
	}

}
else
{
	echo "<script>alert('please fill all data');</script>";}

}


 ?>


