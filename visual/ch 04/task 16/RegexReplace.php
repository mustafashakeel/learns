<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Replace a Substring Using Regular Expressions</title>
</head>
<body>
<?php
	$string = "There are 3 monkeys on 2 tricycles.";

	echo "$string<br />";

	$pattern = array("/1/","/2/","/3/","/4/","/5/");

	$replacement = array('one', 'two', 'three', 'four', 'five');

	$string = preg_replace($pattern, $replacement, $string);

	echo $string;
?>
</body>
</html>
