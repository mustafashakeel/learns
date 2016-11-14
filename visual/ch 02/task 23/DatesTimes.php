<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Working with Dates and Times</title>
</head>
<body>
<?php
	$stamp = mktime(0, 0, 0, 10, 20, 1980);
	echo "The timestamp is: $stamp<br />";

	echo date('M d, Y', $stamp);

	echo '<br />';

	echo date('m/d/y', $stamp);
?>
</body>
</html>
