<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Access File Attributes</title>
</head>
<body>
<?php
	$readable = is_readable('access_log.txt');

	$writeable = is_writable('access_log.txt');

	echo "The file was readable: $readable.<br />";

	echo "The file was writable: $readable.<br />";

	clearstatcache();

	$stats = stat('access_log.txt');

	print_r($stats);
?>
</body>
</html>
