<?php
session_start();
 include 'header.php'; ?>
<?php 
if (!isset($_SESSION['admin'])) {
	header('location:login.php');
}


 ?>
	<!-- CONTENT AREA -->
	<div class="admin-content">
		<div>
			<?php include 'sidebar.php'; ?>
		</div>

		<section>
			<center>
				<img src="admin_img/usama_162305.jpg">
			</center>
		</section>
	</div>



</body>
</html>