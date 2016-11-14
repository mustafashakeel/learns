<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Extract or Replace a Substring</title>
</head>
<body>
<?php
	$source = 'My favorite food is pizza.';

	$newFood = 'cake';

	$currentFood = substr($source, 20, 5);

	echo "My favorite food was $currentFood.<br />";

	$source = substr_replace($source, $newFood, 20, 5);

	echo $source;
?>
</body>
</html>
