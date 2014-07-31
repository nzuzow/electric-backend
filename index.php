<! DOCTYPE html>
<?php
	header("Access-Control-Allow-Origin: http://independentelectrical.net");
?>
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
				window.location = "http://independentelectrical.net/contact.php";
		});
	</script>
</head>
<?php
	$name = $_POST["contact-name"];
	echo $name."<br/>";
	echo "Hello World!";
?>
</html>
