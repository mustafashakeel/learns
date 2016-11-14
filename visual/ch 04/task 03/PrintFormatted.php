<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Printing a Formatted String</title>
</head>
<body>
<?php
	$format = "There are %d monkeys in the %s.";
	$num = 10.5;
	$location = 'Toaster';

	printf($format, $num, $location);
?>
</body>
</html>
