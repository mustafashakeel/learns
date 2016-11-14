<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Subscribe</title>
</head>
<body>
<?php
	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email = $_POST['email'];
		if(is_string($email)){
			$has_at = strpos($email, '@');
			$has_dot = strpos($email, '.');
			if($has_at === false || $has_dot === false){
				echo '<strong>Improperly formatted email.</strong>';
				exit();
			}
			echo 'Thanks for subscribing!';
		}else{
			echo '<strong>The email address was invalid.</strong>';
			exit();
		}
	}else{
		echo '<strong>No email address was provided.</strong>';
	}
?>
</body>
</html>
