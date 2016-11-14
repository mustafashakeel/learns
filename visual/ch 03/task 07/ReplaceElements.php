<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Replace Elements in an Array</title>
</head>
<body>
<?php
	$numbers = array(1, 2, 3, 4);

	$replace = array('a', 'b', 'c', 'd');

	$extracted = array_splice($numbers, 2, 1, $replace);

	print_r($extracted);

	echo '<br />';

	print_r($numbers);
?>
</body>
</html>
