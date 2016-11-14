<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add and Remove Elements from an Array</title>
</head>
<body>
<?php
	$numbers = array(1, 2, 3, 4);

	array_push($numbers, 5);

	print_r($numbers);
	echo '<br />';

	array_pop($numbers);

	print_r($numbers);
	echo '<br />';

	array_unshift($numbers, 0);

	print_r($numbers);
	echo '<br />';

	array_shift($numbers);

	print_r($numbers);
?>
</body>
</html>
