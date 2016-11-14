<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Reformat a String Using Regular Expressions</title>
</head>
<body>
<?php
	$string = "Toby Joe Boudreaux";

	echo "$string<br />";

	$pattern = "/(\w+)\W+(\w+)\W+(\w+)/i";

	$replacement = "\$3, \$1";

	echo preg_replace($pattern, $replacement, $string);
?>
</body>
</html>
