<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Replace All Instances of a Word</title>
</head>
<body>
<?php
	$a = 'How much wood would a woodchuck chuck if a woodchuck could chuck wood?';

	$find = 'woodchuck';

	$replace = 'cow';

	$b = str_replace($find, $replace, $a);

	echo $b;
?>
</body>
</html>
