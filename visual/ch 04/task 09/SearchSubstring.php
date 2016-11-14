<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Search for a Substring or Character</title>
</head>
<body>
<?php
	$source = 'This is the first sentence in the book.';

	$search = 'the';

	$pos = strpos($source, $search);

	echo "The first position is: $pos.<br />";

	$rpos = strpos($source, $search);

	echo "The last position is: $rpos.<br />";
?>
</body>
</html>
