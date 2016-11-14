<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Pass Arguments to a Function</title>
</head>
<body>
<?php
	function getGreeting($user){
		return "Hello, $user!";
	}

	echo getGreeting('Toby');
?>
</body>
</html>
