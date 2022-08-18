<?php include 'nav.php'; ?>
<div class="con-box">
	<form class="contact" method="post" action="contact.php" enctype="multipart/form-data">
		<p>Enter Email</p>
		<input type="text" name="contact_email" placeholder="Enter your Email">
		<p>Enter Subject</p>
		<input type="text" name="contact_subject" placeholder="Enter your Subject">
		<p>Add Message</p>
		<textarea name="contact_message" placeholder="Enter your message"></textarea><br>
		<button type="submit" name="submit">Send Now</button>
	</form>
</div>
<?php include 'footer.php'; ?>

<?php 

if (isset($_POST['submit'])) {
	$u_email = $_POST['contact_email'];
	$subject = $_POST['contact_subject'];
	$message = $_POST['contact_message'];
	$admin_email = "rajputhusama@gmail.com";

	$run = mail($admin_email, $subject, $message, "From:".$u_email);
	if ($run==true) {
		echo "<script>alert('thanks your message is sent')</script>";
	}
	else{
		echo "<script>alert('Error your message is not sent')</script>";
		}
}


 ?>