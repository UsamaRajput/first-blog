<?php 
session_start();
if (!isset($_SESSION['admin'])) {
	header('location:login.php');
}


 ?>
<?php include 'header.php'; ?>
 
	<!-- CONTENT AREA -->
	<div class="admin-content">
		<div>
			<?php include 'sidebar.php'; ?>
		</div>
		<h1 style="text-align: center; font-size: 40px; color: red;"><?php echo @$_GET['deleted']; echo @$_GET['error']; ?></h1>
		<section>
		<table border="2" width="100%;">
			<tr>
				<th>Index</th>
				<th>Image</th>
				<th>Author</th>
				<th>Title</th>
				<th>Content</th>
				<th>Edit</th>
  				<th>Delete</th>
			</tr>
			<?php

require 'connection.php';

$view_query = "SELECT * FROM posts ORDER BY 1 DESC";

$run = mysqli_query($conn,$view_query);
while ($view_data=mysqli_fetch_assoc($run)) {
	static $num = 1;
	$view_id = $view_data['post_id'];
	$view_title = $view_data['post_title'];
	$view_author = $view_data['post_author'];
	$view_img = $view_data['post_image'];
	$view_con = substr($view_data['post_content'],0,30);



  ?>
  <tr>
  		<td><?= $num++; ?></td>
  		<td>
  			<?php
				if($view_img!="") {?>
			<img src='../<?=$view_img; ?>' width='65px' height='65px'>
				
				<?php } ?>
		</td>
  		<td><?= $view_author; ?></td>
  		<td><?= $view_title;?></td>
  		<td><?= $view_con; ?></td>
  		<td><a href="edit_post.php?edit=<?= $view_id;?>">Edit</a></td>
  		<td><a href="delete.php?del=<?= $view_id;?> ">Delete</a></td>

  </tr>


  			

	<?php } ?>	
	</table>	
		</section>
	</div>
	

</body>
</html>