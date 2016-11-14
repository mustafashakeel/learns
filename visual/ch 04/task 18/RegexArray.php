<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create an Array of Matches Using Regular Expressions</title>
</head>
<body>
<?php
	$matches = array();

	$pattern = "/o[aeiou]/";

	$target = 'Toby Joe Boudreaux';

	preg_match_all($pattern, $target, $matches, PREG_OFFSET_CAPTURE);

	print_r($matches);
?>
</body>
</html>
