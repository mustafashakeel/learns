<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Access or Replace Characters by Position in a String</title>
</head>
<body>
<?php
	$source = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

	$char = $source{4};

	echo "The char at position 4 is: $char.<br />";

	$source{4} = ' ';

	echo "The string is ($source).";
?>
</body>
</html>
