<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Sort an Array</title>
</head>
<body>
<?php
	$numbers = array(10, 32, 3, 645, 9, -3, 88);

	sort($numbers);

	print_r($numbers);

	echo '<br />';

	rsort($numbers);

	print_r($numbers);
?>
</body>
</html>
