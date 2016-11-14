<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create or Remove Directories</title>
</head>
<body>
<?php
	$created = mkdir('test0');

	echo "The result of mkdir was: $created.<br />";

	$recursed = mkdir('test1/test2/test3', 0755, true);

	echo "The result of the recursive mkdir was: $recursed.<br />";

	$removed = rmdir('test0');

	echo "The result of rmdir was: $removed.<br />";
?>
</body>
</html>
