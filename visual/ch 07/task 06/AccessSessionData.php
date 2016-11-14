<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Access Saved Session Data</title>
</head>
<body>
	<?php
		$fp = fopen('session.txt', 'r');
		$data = fread($fp, 4096);

		session_decode($data);
		print_r($_SESSION);
	?>	
</body>
</html>
