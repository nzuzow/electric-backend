<! DOCTYPE html>
<?php
	header("Access-Control-Allow-Origin: http://independentelectrical.net");
?>
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
				window.location = "http://independentelectrical.net/dev/contact.html";
		});
	</script>
</head>
<?php
	$name = $_POST["contact-name"];
	$email = $_POST['contact-email'];
	$message = $_POST['contact-message'];
	echo $name."<br/>";
	echo $email."<br/>";
	echo $message."<br/>";
	echo "Hello World!";
?>
</html>
