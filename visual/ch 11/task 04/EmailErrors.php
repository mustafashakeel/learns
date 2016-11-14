<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Log Errors to a File</title>
</head>
<body>
	<?php
		error_log('Error was logged using error_log.',
		0,
		'admin@test.com',
		'From:Site Monitor');
	?>
	The error has been logged.
</body>
</html>
