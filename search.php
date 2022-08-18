
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
	 <section id="post-section">
	 	<?php
	 		require 'connection.php';
	 		if (isset($_GET['search_btn'])) {
	 		$search = $_GET['search'];
	 		if ($search!="") {	 		

	 			$qry = "SELECT * FROM posts WHERE post_title LIKE '%$search%' OR post_content LIKE '%$search%' LIMIT 0,10 ";
	 			$result = mysqli_query($conn,$qry);

	 			while ($data = mysqli_fetch_assoc($result)) {
	 				$p_id =$data['post_id'];
	 				$p_title = $data['post_title'];
	 				$p_img = $data['post_image'];
	 				$p_content = substr($data['post_content'],0,200);	 			 		
	 		?>

	 		<h1><a href="full_post.php?id=<?= $p_id ;?>"><?= $p_title?></a></h1>
	 		<?php 
	 		if ($p_img!="") {?>
	<a href="full_post.php?id=<?= $p_id ;?>"><img class='sidebar-post-img' src='<?= $p_img ?>'></a>;
	 			<?php } ?>
	 		 <p class="post-con"><?= $p_content?></p>
	 		 <a class="full_post_link" href="full_post.php?id=<?= $p_id ;?>">Read More</a>

	 		<?php }
	 		
	 	
	 		 }
	 		 else{
	 		echo "<h1>NOT FOUND!!!!</h1>";
	 		 } 

	 		}

	 		 ?>
	 </section>
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

