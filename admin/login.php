<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn | Please</title>
	<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>
<body>

	<div style="margin-top: 0;" class="ins-post-box">
	<form class="ins-post" method="post" action="login.php" >
		<p>User Name</p>
		<input type="text" name="admin_name" placeholder="Add User Name">
		<p>Password</p>
		<input type="password" name="admin_password" placeholder="Add Password">
		<br>
		<button type="submit" name="admin">LogIn</button>
	</form>
</div>


</body>
</html>
<?php 
require 'connection.php';
if (isset($_POST['admin'])) {

$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];


$ad_qry = "SELECT * FROM admin WHERE admin_name='$admin_name' AND admin_password = '$admin_password'";
$run = mysqli_query($conn,$ad_qry);
	$result = mysqli_num_rows($run);
if ($result>0) {
	$_SESSION['admin']=$admin_name;
	header("location:index.php");
}

}


 ?>