
		 <section id="post-section">
	 		<?php
	 		require 'connection.php';
	 		$fe_qry = "SELECT * FROM posts ORDER BY 1 DESC";
	 		$fe_result = mysqli_query($conn, $fe_qry); 
	 		while ($fe_data = mysqli_fetch_assoc($fe_result)) {
	 			$p_id = $fe_data['post_id'];
	 			$p_title = $fe_data['post_title'];
	 			$p_author =$fe_data['post_author'];
	 			$p_date = $fe_data['post_date'];
	 			$p_content =substr($fe_data['post_content'], 0,300);
	 			if (isset($fe_data['post_image']))
	 			 {$p_img =$fe_data['post_image'];}
	 		?>
	 		<h1><a href="full_post.php?id=<?= $p_id ;?>"><?= $p_title?></a></h1>
	 		<p class="au-da"><?= "Post Author: <span>".$p_author."</span> Publish Post Date: <span>".$p_date."</span>" ?></p>
	 		<?php 
	 			if ($p_img!="") {
	 				echo "<a href='full_post.php?id=<?= $p_id ;?>'>"."<img class='post-img' src='$p_img'>"."</a>";
	 			}
	 		 ?>
	 		 <p class="post-con"><?= $p_content?></p>
	 		 <a class="full_post_link" href="full_post.php?id=<?= $p_id ;?>">Read More</a>

	 		<?php } ?>
		 </section>

		
	