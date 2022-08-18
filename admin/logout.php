<?php 
session_start();
include 'connection.php';
if (isset($_SESSION['admin'])) {
	session_destroy();
	header('location:index.php');
}
else {
	header('location:index.php');
}



 ?>