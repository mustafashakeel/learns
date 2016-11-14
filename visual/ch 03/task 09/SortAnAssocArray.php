<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Sort an Associative Array</title>
</head>
<body>
<?php
	$codes = array('a'=>187, 'z'=>5, 'q'=>64);

	asort($codes);

	print_r($codes);

	echo '<br />';

	ksort($codes);

	print_r($codes);
?>
</body>
</html>
