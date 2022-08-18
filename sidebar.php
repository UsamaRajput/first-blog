
 <aside id="sidebar">
 	<div class="sidebar-post">
 		<center>
 		<div>
 			<form method="get" action="search.php">
	 			<input class="search-box" type="text" name="search" placeholder="search by keyword">
	 			<input type="submit" class="search_btn" name="search_btn" value="search">
	 		</form>
 		</div>
 		</center>
 		<h1><a href='latest_post.php'>Resent Post</a></h1>
		 	<?php
	 		require 'connection.php';
	 		$fe_qry = "SELECT * FROM posts ORDER BY 1 DESC LIMIT 0,3";
	 		$fe_result = mysqli_query($conn, $fe_qry); 
	 		while ($fe_data = mysqli_fetch_assoc($fe_result)) {
	 			$p_id = $fe_data['post_id'];
	 			$p_title = $fe_data['post_title'];
	 			if (isset($fe_data['post_image']))
	 			 {$p_img =$fe_data['post_image'];}
	 		?>
	 		<center>
	 		<?php 
	 			if ($p_img!="") {?>
	<a href="full_post.php?id=<?= $p_id ;?>"><img class='sidebar-post-img' src='<?= $p_img ?>'></a>;
	 			<?php } ?>
	 			
	 		 <h2><a href="full_post.php?id=<?= $p_id ;?>"><?= $p_title?></a></h2>
	 		 	</center>
	 		 <?php } ?>
		</div>
 </aside>