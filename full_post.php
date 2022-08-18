
	<!--
	************** START NAVIGATION MENU ***********************
	 -->
	<?php include 'nav.php'; ?>
	<!--
	************** CLOSE NAVIGATION MENU ***********************
	 -->

	<!--
	************** START BANNER AREA ***********************
	 -->

	 <header id="banner">
	 <div id="banner-headings">
	 	<h1>This is First <span>CMS</span></h1>
		<h2>This is for my Portfolio <span>CMS</span></h2>
	</div>
	 </header>
	<!--
	**************END BANNER AREA ***********************
	 -->
	 <!--
	**************POST SECTION AREA ***********************
	 -->
	 <div id="content-section">
	 	<div id="post-section">
	 <?php
	 require 'connection.php';
	 	$post_id = $_GET['id'];
	 		
	 		$fe_qry = "SELECT * FROM posts WHERE post_id='$post_id'";
	 		$fe_result = mysqli_query($conn, $fe_qry); 
	 		$fe_data = mysqli_fetch_assoc($fe_result); 
	 			$p_title = $fe_data['post_title'];
	 			$p_author =$fe_data['post_author'];
	 			$p_date = $fe_data['post_date'];
	 			$p_content =$fe_data['post_content'];
	 			if (isset($fe_data['post_image']))
	 			 {$p_img =$fe_data['post_image'];}
	 		?>
	 		<h1><?= $p_title?></h1>
	 		<p class="au-da"><?= "Post Author: <span>".$p_author."</span> Publish Post Date: <span>".$p_date."</span>" ?></p>
	 		<?php 
	 				echo "<img class='post-img' src='$p_img'>";
	 		 ?>
	 		 <p class="post-con"><?= $p_content?></p>
	 		 </div>
	 		 
	 		 
	 <?php include 'sidebar.php'; ?>
	 </div>
	
	<!--
	**************END POST AREA ***********************
	 -->
	 <!--
	***************** START FOOTER AREA ***********************
	 -->
	<?php include 'footer.php'; ?>
	<!--
	**************END FOOTER AREA ***********************
	 -->

