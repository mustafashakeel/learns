<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Delete a Cookie</title>
</head>
<body>
	<?php
		setcookie('test', '', time() - 3600, '/', 'www.testserver.com');
	?>
	The cookie has been deleted.
</body>
</html>
