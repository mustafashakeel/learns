<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Using the List Statement</title>
</head>
<body>
<?php
	$name = array('Toby', 'Joe', 'Boudreaux');

	list($first, $middle, $last) = $name;

	echo "The full name is $first $middle $last.";
?>
</body>
</html>
