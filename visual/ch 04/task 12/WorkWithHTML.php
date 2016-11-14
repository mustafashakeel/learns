<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Work with HTML Text</title>
</head>
<body>
<?php
	$headline = "<h1>HTML & Text</h1>";

	echo $headline;

	$h2 = htmlspecialchars($headline);

	echo "$h2<br />";

	$h3 = htmlentities($headline);

	echo "$h3<br />";	
?>
</body>
</html>
