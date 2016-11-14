<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Using ASCII Values</title>
</head>
<body>
<?php
	$char = 'X';

	$ascii = ord($char);

	echo 'The ASCII code is: ' . $ascii . '.<br />';

	$newChar = chr($ascii);

	echo "The result of chr is: $newChar.<br />";
?>
</body>
</html>
